var popUp = document.getElementById('popUp');
var register = document.getElementById('register')
var body = document.getElementsByTagName("BODY")[0]; 

register.onclick = function() {
    popUp.style.display = "flex";
    body.style.overflow ="hidden";

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
