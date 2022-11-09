function onLoadDocument() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.responseText)
        let parsedlist = JSON.parse(this.responseText)
        parsedlist.forEach(element => {
            element.forEach(el => {
                document.getElementById('vrienden').innerHTML = document.getElementById('vrienden').innerHTML +
                    '<div class="vriend">\n' +
                    '<h3>' + el.firstname + '</h3>\n' +
                    '<h3>' + el.lastname + '</h3>\n' +
                    '<a class="remove" href="./removefriend.php?idfriend=' + el.idfriend + ' ">\n' +
                    '<span>Remove</span>\n' +
                    '</a>\n' +
                    '</div>'
            });

        });
    }
    xhttp.open("GET", "getfriends.php", true);
    xhttp.send();
}

onLoadDocument();