toastr.options = {
    timeOut: 0,
    extendedTimeOut: 0,
    toastClass: 'toast-custom-class'
}

let text = `
        <div class="p-2">
            <div class="survey-text  mb-2">
                <h4>Just a little survey</h4>
                Please take a short survey with us to know you better and define your content
            </div>
            <div class="w-100 d-flex justify-content-between border-top pt-3">
                <button class="btn btn-primary rounded-0" onclick="goSurvey()">Let's go</button>
                <button class="btn btn-secondary rounded-0">Not today</button>
            </div>
        </div>
        `;

let goSurvey = () => {
    console.log("go-survey");
    $("#survey").modal("show");
}

toastr.info(text);