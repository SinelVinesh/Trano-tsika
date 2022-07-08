$(document).ready(function() {
    $(".ignorer").click(function() {
        $("#survey").modal("hide");
    });
    $(".next").click(function() {
        var radioValue = $("input[name='response']:checked").val();
        if (radioValue) {
            // Send request
            // Get & Set Data
            let surveyQuestion = $("#questionSurvey");
            surveyQuestion.empty();
            surveyQuestion.append("Êtes-vous Tenant ou Leese?");

            let form = $(".form");
            form.empty();
            form.append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='yes'><label class='form-check-label'>Next Yes</label></div>");
            form.append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='no'><label class='form-check-label'>Next No</label></div>");
        } else {
            alert("Please! Do your choice");
        }
    });
});

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