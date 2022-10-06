function onLoadDocument() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.responseText)
        let parsedlist = JSON.parse(this.responseText)
        parsedlist.forEach(element => {
            document.getElementById('vrienden').innerHTML = document.getElementById('vrienden').innerHTML +
                '<div class="vriend">\n' +
                '<h3>' + element.firstname + '</h3>\n' +
                '<h3>' + element.lastname + '</h3>\n' +
                '<a href="./removefriend.php?idfriend=' + element.idfriend + ' ">\n' +
                '<span>Verwijder</span>\n' +
                '</a>\n' +
                '</div>'
        });
    }
    xhttp.open("GET", "getfriends.php", true);
    xhttp.send();
}

onLoadDocument();