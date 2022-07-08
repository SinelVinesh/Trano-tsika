$("#show-make-post").click(() => {
    $("#make-post").modal("show");
});

$("#submit-make-post").click(() => {
    $("#make-post").modal("hide");
    $("#boost-advantage").modal("show");
});

$("#publish-free").click(() => {
    console.log("taY");
    $("#submit-post").trigger("click");
});

$("#publish-boost").click(() => {
    $("#boost-advantage").modal("hide");
    $("#pay-boost").modal("show");
});