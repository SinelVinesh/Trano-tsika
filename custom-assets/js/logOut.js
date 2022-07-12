$("#go-out").click(() => {
    console.log("go");
    $("#logOut").trigger("click");
});


$("#go-mine").click(() => {
    $("#mine").trigger("click");
});
