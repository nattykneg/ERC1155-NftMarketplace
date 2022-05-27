function ChatController(user_id, selected_user_id, selected_user_name, socketUrl) {
    $this = this;
    var appService = new ChatService(socketUrl);
    $this.data = {
        username: '',
        chatlist: [],
        selectedFriendId: selected_user_id,
        touserinfo: {},
        messages: []
    };

    appService.connectSocketServer(user_id);

    appService.socketEmit(`chat-list`, user_id);

    /**
     * This HTTP call will fetch chat between two users
     */
    appService.getMessages(user_id, selected_user_id).then((response) => {
        var messageGroups = $this.groupMessages(response);
        $.each(messageGroups, function (i, group) {
            $(".message-thread").append($("<li>").html(group.date).addClass('message-date'));
            $.each(group.messages, function (i, data) {
                $this.addMessage(data);
            });
        });
        appService.scrollToBottom();
    }).catch((error) => {
        console.log(error);
    });

    appService.socketOn('chat-list-response', (response) => {
        console.log("TCL: response", response);

        if (!response.error) {
            if (response.singleUser) {
                /* 
                 * Removing duplicate user from chat list array
                 */
                if ($this.data.chatlist.length > 0) {
                    $this.data.chatlist = $this.data.chatlist.filter(function (obj) {
                        return obj.id !== response.chatList.id;
                    });
                }
                /* 
                 * Adding new online user into chat list array
                 */
                $this.data.chatlist.push(response.chatList);
            } else if (response.userDisconnected) {
                /* 
                 * Removing a user from chat list, if user goes offline
                 */
                $this.data.chatlist = $this.data.chatlist.filter(function (obj) {
                    return obj.socketid !== response.socketId;
                });

            } else {
                /* 
                 * Updating entire chatlist if user logs in
                 */
                $this.data.chatlist = response.chatList;
                $this.data.touserinfo = response.touserinfo;
            }



        } else {
            alert(`Faild to load Chat list`);
        }
    });

    /*
     * This eventt will display the new incmoing message
     */
    appService.socketOn('add-message-response', (response) => {
        if (response && response.fromUserId == $this.data.selectedFriendId) {
            $this.addMessage(response);
            appService.scrollToBottom();
        }
    });

    $this.addMessage = (data) => {
        var li = $("<li>");
        if ($this.alignMessage(data.fromUserId)) {
            li.addClass('align-right');
            li.append($('<span>').addClass('uname').html('you'));
        } else {
            li.append($('<span>').addClass('uname').html(selected_user_name));
        }
        li.append(data.message);
        if (!data.time) {
            var dt = new Date();
            var hours = dt.getHours();
            var minutes = dt.getMinutes();
            var strampm;
            if (hours >= 12) {
                strampm = "pm";
            } else {
                strampm = "am";
            }
            hours = hours % 12;
            if (hours == 0) {
                hours = 12;
            }
            data.time = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + strampm;
        }
        li.append($('<span>').addClass('sent_time').html(data.time));
        $(".message-thread").append(li);
        appService.scrollToBottom();
    }

    $this.sendMessage = (event) => {

        if (event.keyCode === 13) {

            if (!$('#message').val().trim()) {
                event.preventDefault();
                return;
            }

            let toUserId = null;
            let toSocketId = null;

            /* Fetching the selected User from the chat list starts */
            let selectedFriendId = $this.data.selectedFriendId;
            if (selectedFriendId === null) {
                return null;
            }
            friendData = $this.data.chatlist.filter((obj) => {
                return obj.id === selectedFriendId;
            });
            /* Fetching the selected User from the chat list ends */

            let messagePacket = {};
            /* Emmiting socket event to server with Message, starts */
            if (friendData.length > 0) {
                toUserId = friendData[0]['id'];
                toSocketId = friendData[0]['socketid'];
                messagePacket = {
                    message: document.querySelector('#message').value,
                    fromUserId: user_id,
                    toUserId: toUserId,
                    userName: selected_user_name,
                    toSocketId: toSocketId
                };
            } else {
                // send messages when user is offline
                messagePacket = {
                    message: document.querySelector('#message').value,
                    fromUserId: user_id,
                    toUserId: selectedFriendId,
                    userName: selected_user_name,
                    toSocketId: ''
                };
            }
            $this.addMessage(messagePacket);
            appService.socketEmit(`add-message`, messagePacket);
            $('#message').val('');
            appService.scrollToBottom();
            /* Emmiting socket event to server with Message, ends */
            event.preventDefault();
            return;
        }
    }


    $this.groupMessages = (data) => {
        // this gives an object with dates as keys
        const groups = data.reduce((groups, message) => {
            message.sent_timestamp = formatTime(message.sent_timestamp);
            const date = message.sent_timestamp.split(' ')[0];
            message.time = message.sent_timestamp.split(' ')[1];
            if (!groups[date]) {
                groups[date] = [];
            }
            groups[date].push(message);
            return groups;
        }, {});


        // Edit: to add it in the array format instead
        const groupArrays = Object.keys(groups).map((date) => {
            return {
                date,
                messages: groups[date]
            };
        });

        return groupArrays;
    }

    $this.alignMessage = (fromUserId) => {
        return fromUserId == user_id ? true : false;
    }
}

function trimMessage(text, count) {
    return text.slice(0, count) + (text.length > count ? "..." : "");
}

function formatTime(date) {
    var dt = new Date(date)
    dt.setMinutes(dt.getMinutes() - dt.getTimezoneOffset());
    var date = ('0' + dt.getDate()).slice(-2) + '-' + ('0' + (dt.getMonth() + 1)).slice(-2) + '-' + dt.getFullYear();
    var hours = dt.getHours();
    var minutes = dt.getMinutes();
    var strampm;
    if (hours >= 12) {
        strampm = "pm";
    } else {
        strampm = "am";
    }
    hours = hours % 12;
    if (hours == 0) {
        hours = 12;
    }
    var timestring = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + strampm;
    var dateTime = date + ' ' + timestring;
    return dateTime;
}
var csrfLocal;
function loadChats(socketUrl, refresh, csrf) {
    if (csrf) {
        csrfLocal = csrf;
    }
    var appService = new ChatService(socketUrl);
    appService.getAllMessages().then((response) => {
        var element = $('.chat-ul');
        var notificationElem = $('.count-chat');
        if (refresh) {
            element.html('');
        }
        var unreadMessages = response.chats.filter(function (chat) {
            if (chat.to_user_id == response.user_id) {
                return !chat.read_status;
            }
            return false;
        })
        if (unreadMessages.length) {
            notificationElem.show();
            notificationElem.html(unreadMessages.length);
        } else {
            notificationElem.hide();
        }
        $.each(response.chats, function (i, chat) {
            var html = '';
            var read = '';
            if (chat.from_user_id == response.user_id) {
                html += '<li class="notification-box" onclick="redirectToChat(' + chat.to_user_id + ', ' + chat.id + ')"><div class="row"><div class="col-lg-3 col-sm-3 col-3 text-center"><i class="glyphicon glyphicon-user"></i></div><div class="col-lg-9 col-sm-9 col-9">';
                html += '<strong class="text-danger">' + chat.toUserName + ' </strong> ';
                html += `<div>
                `+ trimMessage(chat.message, 50) + `
                &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-share-alt"></i> </div>`;
                read = chat.read_status ? 'unread' : '';

            } else {
                html += '<li class="notification-box" onclick="redirectToChat(' + chat.from_user_id + ', ' + chat.id + ')"><div class="row"><div class="col-lg-3 col-sm-3 col-3 text-center"><i class="glyphicon glyphicon-user"></i></div><div class="col-lg-9 col-sm-9 col-9">';
                html += '<strong class="text-danger">' + chat.fromUserName + '</strong>';
                html += `<div>` + trimMessage(chat.message, 50) + `</div>`;
            }
            html += `<small class="text-warning">` + formatTime(chat.sent_timestamp) + `</small>`
            html += `</div>
                    </div>
                </li>`;
            $(html).addClass(read).appendTo(element);
        });

        if (!response.chats.length) {
            element.html(
                `<li class="notification-box">
                <div class="row ">
                    <div class="ml-30">
                        <div class="ml">
                            No Messages
                        </div>
                </div>
            </li>`);
        }
    }).catch((error) => {
        console.log(error);
    });
}

function redirectToChat(redirectId, messageId) {
    var appService = new ChatService(socketUrl);
    appService.readMessage(messageId, csrfLocal).then((response) => {
        setTimeout(() => {
            window.location.href = "/chat/single/" + redirectId;
        }, 0);
    });
}

$('#messages').click(function () {
    if (!$(this).parent().hasClass('open')) {
        new loadChats(socketUrl, true);
    }
});
