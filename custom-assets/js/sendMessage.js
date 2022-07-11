let sendMessage = () => {
    let mText = $("#corpsmessage").val();
    $.ajax({
        type: "POST",
        url: `${site_url}/DetailPublicationController/envoyer/${pubIdclient}/${idPublication}`,
        data: {
            message_texte: mText
        }
    }).done((data) => {
        $("#onemessage").append(`
            <li class="you">
                <div class="notification-event">
                    <div class="infos" >
                        <div class="info-details">
                            <span class="chat-message-item">
                                ${mText}
                            </span>
                            <span class="notification-date">
                                <time datetime=""
                                      class="entry-date updated">a l'instant
                                </time>
                            </span>
                        </div>
                    </div>
                </div>
            </li>`
        );
        scrollEndMessage();
    });

    $("#corpsmessage").val("")
}

$("#send-message").click(() => {
    sendMessage();
});

$("#corpsmessage").keyup((e) => {
    if (e.keyCode === 13) {
        sendMessage();
    }
});

$("#contact-owner").click(() => {
    $("#onemessage").empty();
    $.ajax({
        url: `${site_url}/DiscussionController/get/${idPublication}`
    }).done((data) => {
        $("#onemessage").append(data);
    });
});
