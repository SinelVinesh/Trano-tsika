$("#show-notif").click(() => {
    let notifBox = $("#notif-box > .drops-menu");
    $(".number").empty();
    notifBox.empty();
    $.ajax({
        url: urlNotif
    }).done((data) => {
        notifBox.append(data);
        $(".number").text(($("#notif-box > .drops-menu > li").length));
    });
});