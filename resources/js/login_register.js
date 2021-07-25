var loginbtn = document.querySelector('.login-btn');
var registerbtn = document.querySelector('.register-btn');
if (registerbtn) {
    registerbtn.onclick = function() {
        window.location.href = "/user/register";
    }
}
if (loginbtn) {
    loginbtn.onclick = function() {
        window.location.href = "/user/login";
    }
}

$(document).ready(function() {
    if ($('.register input[name="success"]').val()) {
        $(".register #overlay").css({ "display": "block" });
        $(".register #popup").css({ "display": "block" });
        $(".register .form-box").css({ "display": "none" });
    }
})