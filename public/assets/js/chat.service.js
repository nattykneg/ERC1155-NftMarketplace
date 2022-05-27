'use strict';

class ChatService{
    constructor(socketUrl){
        this.socketUrl = socketUrl;
        this.$http = $;
        this.socket =  null;
    }
    httpCall(httpData){
        if (httpData.url === undefined || httpData.url === null || httpData.url === ''){
            alert(`Invalid HTTP call`);
        }
        const HTTP = this.$http;
        const params = httpData.params;
        return new Promise( (resolve, reject) => {
            HTTP.getJSON(httpData.url, params).done( (response) => {
                resolve(response);
            }).fail( (response) => {
                reject(response);
            });
        });
    }
    connectSocketServer(userId){
        const socket = io( this.socketUrl, { query: `userId=${userId}` });
        this.socket = socket;
    }

    socketEmit(eventName, params){
        this.socket.emit(eventName, params);
    }

    socketOn(eventName, callback) {
        this.socket.on(eventName, (response) => {
            if (callback) {
                callback(response);
            }
        });
    }
    
    getMessages(userId, friendId) {
        return new Promise((resolve, reject) => {
            this.httpCall({
                url: '/chat/get-messages',
                params: {
                    'userId': userId,
                    'toUserId': friendId
                }
            }).then((response) => {
                resolve(response);
            }).catch((error) => {
                reject(error);
            });
        });
    }

    getAllMessages(userId, friendId) {
        return new Promise((resolve, reject) => {
            this.httpCall({
                url: '/chat/getall-messages',
                params: {}
            }).then((response) => {
                resolve(response);
            }).catch((error) => {
                reject(error);
            });
        });
    }

    readMessage(id, csrf) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: '/chat/read-message/'+id,
                method:'put',
                headers: { 'X-CSRF-TOKEN': csrf }
            }).done( (response) => {
                resolve(response);
            }).fail( (response) => {
                reject(response);
            });
        });
    }

    scrollToBottom(){
        const messageThread = document.querySelector('.message-thread');
        setTimeout(() => {
            messageThread.scrollTop = messageThread.scrollHeight + 500;
        }, 10);        
    }
}
