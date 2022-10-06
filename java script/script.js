var popUp = document.getElementById('popUp');
var register = document.getElementById('register')

register.onclick = function() {
    popUp.style.display = "flex";
}

var spanClose = document.getElementById('spanClose')

spanClose.onclick = function (){
    popUp.style.display = "none";
}

var buttonCancel = document.getElementById('buttonCancel')

buttonCancel.onclick = function (){
    popUp.style.display = "none";
}

// window.onclick = function(event) {
//     if (event.target === popUp) {
//         popUp.style.display = "none";
//     }
// }
