$("#show-make-post").click(() => {
    $("#make-post").modal("show");
});

$("#submit-make-post").click(() => {
    $("#pub-form").validate();
    if($("#pub-form").valid()) {
        $("#make-post").modal("hide");
        $("#boost-advantage").modal("show");
    }
});

$("#publish-free").click(() => {
    $("#submit-post").trigger("click");
});

$("#publish-boost").click(() => {
    $("#boost-advantage").modal("hide");
    $("#pay-boost").modal("show");
});

$("#post-boost").click(() => {
    $("#pay-boost").modal("hide");
    let duration = $("#display-duration").val();
    $("#duration").val(duration);
    $("#submit-post").trigger("click");
});