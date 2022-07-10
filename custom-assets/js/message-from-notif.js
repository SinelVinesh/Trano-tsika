$("#show-discussions").click(() => {

    let discuBox = $("#discussion-box > .drops-menu");
    $(".messageNumber").empty();
    discuBox.empty();

    $.ajax({
        url: lastMessageUrl
    }).done((data) => {
        discuBox.append(data);
        $(".messageNumber").text($("#discussion-box > .drops-menu > li").length);

        $(".discussion").on("click", (e) => {

            let target = $(e.target);

            while (target.attr("pub-id") == null && target.attr("another") == null ) {
                target = target.parent();
            }

            let pubId = target.attr("pub-id");
            let another = target.attr("another");

            pubIdclient = another;
            idPublication = pubId;

            $.ajax({
                url: `${loadingUrlBase}${another}&id_pub=${pubId}`
            }).done((data) => {
                console.log(data);
                let messagesBox = $("#onemessage");
                messagesBox.empty();
                messagesBox.append(data);

                $("#user").text($('#get-user').text());
                $("#titre-message").text($('#get-titre').text());

                $("#message").modal("show");
            });
        });
    });
});