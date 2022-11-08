function onLoadDocument() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.responseText)
        let parsedlist = JSON.parse(this.responseText)
        parsedlist.forEach(element => {
            document.getElementById('myevents').innerHTML = document.getElementById('myevents').innerHTML +
                '<div class="evenement">\n' +
                '<h3>' + element.titel + '</h3>\n' +
                '<a class="information" href="">\n' +
                '<span>Information</span>\n' +
                '</a>\n' +
                '<a class="remove" href="./removeevent.php?idevent=' + element.id + ' ">\n' +
                '<span>Verwijder</span>\n' +
                '</a>\n' +
                '</div>'
        });
    }
    xhttp.open("GET", "getevents.php", true);
    xhttp.send();
}

onLoadDocument();