$("#search").click(() => {
    console.log("ok");
    $("#searchModal").modal("show");
});

let shown = false;

$(".multi-text").click(() => {
    if (!shown) {
        $("#caret-down").hide();
        $("#caret-left").show();
        $(".search-box").show();
        shown = true;
    } else {
        $("#caret-down").show();
        $("#caret-left").hide();
        $(".search-box").hide();
        shown = false;
    }
});

$("#search-criteria").keyup((e) => {
    if(e.keyCode === 13) {
        let value = $("#search-criteria").val();
        $("#go-search").trigger("click");
    }
});