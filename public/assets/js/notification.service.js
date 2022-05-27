'use strict';

// Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

channel.bind('App\\Events\\PushNotification', notify);

function notify(response) { // {title,body,url,image}
    if(response.type == 'new-message'){
        response.message.url = '/chat/single/'+response.from        
        new loadChats(socketUrl, false, token);
    } else {
        new loadActivities(socketUrl, true, token);
    }
    Push.create(response.message.title, {
        body: response.message.body,
        icon: response.message.image ? response.message.image : '',
        timeout: 8000,               // Timeout before notification closes automatically.
        vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
        onClick: function() {
            // Callback for when the notification is clicked. 
            if(response.message.url){
                window.open(response.message.url);
            }
        }
    });
}