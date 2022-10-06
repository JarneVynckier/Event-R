
var popUp = document.getElementById('popUp');
var register = document.getElementById('register')
var body = document.getElementsByTagName("BODY")[0]; 

register.onclick = function() {
    popUp.style.display = "flex";
    body.style.overflow ="hidden";
    checkPsw();
}

var spanClose = document.getElementById('spanClose')

spanClose.onclick = function (){
    popUp.style.display = "none";
    body.style.overflow ="visible";
}

var buttonCancel = document.getElementById('buttonCancel')

buttonCancel.onclick = function (){
    popUp.style.display = "none";
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
        document.getElementById('pswR').innerHTML = 'Repeat Password (Passwords dont match)'
        
    }
}