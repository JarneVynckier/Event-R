function displayGegevens() {
    document.getElementById("gegevens").style.display = 'block';
    document.getElementById("vriendendisplay").style.display = 'none';
    document.getElementById("evenementen").style.display = 'none';

    document.getElementById("btngegevens").style.backgroundColor = "#d3cece";
    document.getElementById("btnvrienden").style.backgroundColor = "white";
    document.getElementById("btnevenementen").style.backgroundColor = "white";
}

function displayVrienden() {
    document.getElementById("gegevens").style.display = 'none';
    document.getElementById("vriendendisplay").style.display = 'block';
    document.getElementById("evenementen").style.display = 'none';

    document.getElementById("btngegevens").style.backgroundColor = "white";
    document.getElementById("btnvrienden").style.backgroundColor = "#d3cece";
    document.getElementById("btnevenementen").style.backgroundColor = "white";
}

function displayEvenementen() {
    document.getElementById("gegevens").style.display = 'none';
    document.getElementById("vriendendisplay").style.display = 'none';
    document.getElementById("evenementen").style.display = 'block';

    document.getElementById("btngegevens").style.backgroundColor = "white";
    document.getElementById("btnvrienden").style.backgroundColor = "white";
    document.getElementById("btnevenementen").style.backgroundColor = "#d3cece";
}
