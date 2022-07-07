$(".discussion").on("click", (e) => {
    $("#message").modal("show");
    let target = $(e.target);
    while (target.attr("discussion-id") == null) {
        target = target.parent();
    }
    console.log(target.attr("discussion-id"));
});

let messageObserver = new ResizeObserver(() => {
    let messages = $("#onemessage");
    console.log(messages[0].scrollHeight);
    messages.animate({scrollTop: messages[0].scrollHeight}, 1000, 'easeOutCirc');
});

messageObserver.observe(document.getElementById("onemessage"));
