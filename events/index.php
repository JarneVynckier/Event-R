<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

session_start();

$userid = $_SESSION["iduser"];
$idevent = $_GET["idevent"];
// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "SELECT id, titel, beschrijving, adres, afbeelding, tijdstip FROM eventrevents WHERE id = '$idevent'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sendarray = array();
    foreach ($result as $key => $value) {
        $id = $value['id'];
        $titel = $value['titel'];
        $beschrijving = $value['beschrijving'];
        $adres = $value['adres'];
        $afbeelding = $value['afbeelding'];
        $tijdstip = $value['tijdstip'];
    }
}
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <title>Events</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <!--    <link rel="stylesheet" href="./../css/atomic-disign.css"> -->
</head>
<body>
<header>
    <nav>
        <div class="nav-top">
            <img class="logo" src="../resources/Logo.png" height="64" alt="logo">
        </div>

        <ul id="myLinks" class="nav-links">
            <li><a class="nav-link" href="./../">HOME</a></li>
            <li><a class="nav-link" href="./../account">MY ACOUNT</a></li>
            <li><a class="nav-link" href="./../about">ABOUT</a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="main-wrapper">
        <section>
            <h1><?php echo $titel; ?></h1>
            <h2><?php echo $tijdstip; ?> (adres: <?php echo $adres; ?>)</h2>
            <div class="img-inline-text">
                <img src="<?php echo $afbeelding; ?>" alt="Afbeelding van het evenement">
                <p>
                    <?php echo $beschrijving; ?>
                </p>
            </div>
            <div class="btn-group">
                <a href="" class="button">Intrested</a>
                <a href="" class="button">Going</a>
                <a href="" class="button">Can't Go :(</a>
            </div>
        </section>

    </div>
</main>
</body>
</html>