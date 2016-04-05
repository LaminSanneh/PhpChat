$(document).ready(function () {
    var conn = new WebSocket('ws://localhost:8080');
    var chatForm = $(".chatForm"),
        messageInputField = chatForm.find("#message"),
        messagesList = $(".messages-list"),
        usernameForm = $(".username-setter"),
        usernameInput = usernameForm.find(".username-input");

    chatForm.on("submit", function (e) {
        e.preventDefault();
        var message = {
            text: messageInputField.val(),
            sender: $.cookie('chat_name'),
            type: 'message'
        }

        conn.send(JSON.stringify(message));
        messagesList.prepend('<li class="label label-success" >'+message.text+'</li>');
    });

    usernameForm.on("submit", function (e) {
        e.preventDefault();
        var chatName = usernameInput.val();
        if(chatName.length > 0){
            $.cookie('chat_name', chatName);
            $('.username').text(chatName);
        }
    });

    conn.onopen = function(e) {
        console.log("Connection established!");
        $.ajax({
            url: '/load_history.php',
            dataType: 'json',
            success: function (data) {
                $.each(data, function () {
                    if(this.sender == $.cookie('chat_name')){
                        messagesList.prepend('<li class="label label-success" >'+this.text+'</li>');
                    }
                    else{
                        messagesList.prepend('<li>'+this.text+'</li>');
                    }
                })
            }
        });

        var chatName = $.cookie('chat_name');
        if(!chatName){
            var timestamp = (new Date()).getTime();
            chatName = 'anonymous'+timestamp;
            $.cookie('chat_name', chatName);
        }

        $('.username').text(chatName);
    };

    conn.onmessage = function(e) {
        console.log(e.data);
        messagesList.prepend('<li>'+e.data+'</li>');
    };
});
