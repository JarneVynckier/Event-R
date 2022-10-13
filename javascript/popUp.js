var popUpRegister = document.getElementById('popUpRegister');
var register = document.getElementById('register');
var body = document.getElementsByTagName("BODY")[0];
var popUpLogin = document.getElementById('popUpLogin');
var login = document.getElementById('login');

login.onclick = function() {
    popUpLogin.style.display = "flex";
    body.style.overflow ="hidden";
    checkPsw();
}

register.onclick = function() {
    popUpRegister.style.display = "flex";
    body.style.overflow ="hidden";
    checkPsw();
}

var spanClose = document.getElementById('spanClose')
var spanCloseLogin = document.getElementById('spanCloseLogin')

spanCloseLogin.onclick = function (){
    popUpLogin.style.display = "none";
    body.style.overflow ="visible";
}

spanClose.onclick = function (){
    popUpRegister.style.display = "none";
    body.style.overflow ="visible";
}

var buttonCancel = document.getElementById('buttonCancel')
var buttonCancelLogin = document.getElementById('buttonCancelLogin')

buttonCancelLogin.onclick = function (){
    popUpLogin.style.display = "none";
    body.style.overflow = "visible";
}

buttonCancel.onclick = function (){
    popUpRegister.style.display = "none";
    body.style.overflow = "visible";
}

// window.onclick = function(event) {
//     if (event.target === popUp) {
//         popUp.style.display = "none";
//     }
// }

function checkPsw() {
    var event = document.getElementById('psw-repeat')
    var password = document.getElementById('psw')

    if (password.value === event.value) {
        if (password.value === "") {
            document.getElementById('buttonSignup').style.visibility = 'hidden';
            return;
        }

        document.getElementById('pswR').style.color = 'black';
        document.getElementById('buttonSignup').style.visibility = 'unset';
        document.getElementById('form').setAttribute('action', "insert.php");
        document.getElementById('form').setAttribute('method', "post");
    }
    else {
        document.getElementById('pswR').style.color = 'red';
        document.getElementById('pswR').innerHTML = 'Repeat Password (Passwords dont match)';
    }
}