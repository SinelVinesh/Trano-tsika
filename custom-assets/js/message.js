
let scrollEndMessage = () => {
    let messages = $("#onemessage");
    console.log(messages[0].scrollHeight);
    messages.animate({scrollTop: messages[0].scrollHeight}, 1000, 'easeOutCirc');
}

let messageObserver = new ResizeObserver(() => {
    scrollEndMessage();
});

messageObserver.observe(document.getElementById("onemessage"));
