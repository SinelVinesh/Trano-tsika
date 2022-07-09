let fileInput = $("#file-input");
let imageContainer = $(".images");
let imgRemoved = $("#img-removed");
imgRemoved.val([]);
let nb = 0;

function preview() {
    for (let i of fileInput.prop("files")) {
        let reader = new FileReader();
        let div = $('<div class="img-preview" ></div>');
        let remove = $('<a class="x-box">×</a>');

        reader.onload = () => {
            imageContainer.height("310px");
            nb = nb + 1;
            let img = $('<img/>');
            img.attr("src", reader.result);
            remove.attr("img-id", nb);
            div.append(remove);
            div.append(img);
        }

        remove.click(() => {
            remove.parent().remove();
            let v = imgRemoved.val();
            v = (v!=='') ? v+",":v;
            imgRemoved.val(v+remove.attr("img-id"));
        });

        imageContainer.append(div);
        reader.readAsDataURL(i);
    }
}