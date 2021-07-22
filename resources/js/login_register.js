var x = document.getElementById("login")
var y = document.getElementById("register")
var z = document.getElementById("btn")
var loginbtn = document.querySelector('.login-btn');
var registerbtn = document.querySelector('.register-btn');

registerbtn.onclick = function() {
    x.style.left = "-400px"
    y.style.left = "50px"
    z.style.left = "120px"
}
loginbtn.onclick = function() {
    x.style.left = "50px"
    y.style.left = "450px"
    z.style.left = "0"
}