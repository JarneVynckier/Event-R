

function checkPsw() {
    var event = document.getElementById('psw-repeat')
    var password = document.getElementById('psw')
    if (password.value === event.value) {
        document.getElementById('pswR').style.color = 'black';
        document.getElementById('buttonSignup').style.visibility = 'unset';
        document.getElementById('form').setAttribute('action', "insert.php");
        document.getElementById('form').setAttribute('method', "post");
    }
    else {
        document.getElementById('pswR').style.color = 'red';
        document.getElementById('pswR').innerHTML = 'Repeat Password (Passwords dont match)'
        document.getElementById('buttonSignup').style.visibility = 'hidden';
    }
}