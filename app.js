$(document).ready(function () {
    $("#show-forgot-pass").on("click", function (e) {
        e.preventDefault();
        $("#signInSection").removeClass("d-flex").addClass("d-none");
        $("#forgotSection").removeClass("d-none").addClass("d-flex");
    });
    $(".back-to-login").on("click", function (e) {
        e.preventDefault();
        $("#forgotSection").removeClass("d-flex").addClass("d-none");
        $("#signInSection").removeClass("d-none").addClass("d-flex");
        $("#createaccsection").removeClass("d-flex").addClass("d-none");
    });

    $("#signInSection .submit").click(function () {
        var email = $("#signInSection .email").val();
        var pass = $("#signInSection .pass").val();
        var emailch = email.match(/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/);
        var err = $("#signInSection .err");
        if (email == "" || pass == "") {
            err.html("All fields are compulsory!");
            return false;
        } else if (!emailch) {
            err.html("Invalid Email!");
            return false;
        } else if (pass.length != 8) {
            err.html("Password length is 8!");
            return false;
        } else {
            err.html("");
            return true;
        }
    })
});