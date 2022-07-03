
let observeModals = new MutationObserver(() => {
    let body = $("body");
    if($('.show').length > 0) {
        console.log("tay");
        body.addClass("modal-open");
    }
    else if (body.attr("style") !== '') {
        $('body').attr('style', '');
    }
});

observeModals.observe(document.body,  {attributes: true});

$("#link-map").on('shown.bs.modal', () => {
    $("#make-post").modal('hide');
});


$("#link-map").on('hidden.bs.modal', () => {
    $("#make-post").modal('show');
});

