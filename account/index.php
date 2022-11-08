<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <title>Account</title>
    <link rel="stylesheet" href="./style.css">
    <script src="getfriends.js"></script>
    <script src="getevent.js"></script>
    <script src="display.js"></script>
</head>
<body>

<?php
$loggedin = "true";
?>

<header>
    <nav>
        <div class="nav-top">
            <img class="logo" src="../resources/logo.png" height="64" alt="logo">
            <a class="menu-icon" href="javascript:void(0);" onclick="myFunction()"><img
                        src="resources/navigation-menu.svg" width="32" class="rotate" alt="menu"></a>
        </div>

        <ul id="myLinks">
            <li class="button-link">
                <button id="login">Login</button>
            </li>
            <li class="button-link">
                <button id="register">Register</button>
            </li>
            <li><a href="">HOME</a></li>
            <li><a href="events">MY EVENTS</a></li>
            <li><a href="./account">MY ACOUNT</a></li>
            <li><a href="about">ABOUT</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Mijn account</h1>
    <nav>
        <button id="btngegevens" onclick="displayGegevens()">Gegevens</button>
        <button id="btnvrienden" onclick="displayVrienden()">Vrienden</button>
        <button id="btnevenementen" onclick="displayEvenementen()">Evenementen</button>
    </nav>
    <?php
    if ($loggedin == "true") {
        ?>
        <section id="gegevens">
            <div class="container">
                <form class="kader">
                    <div class="insert">
                        <label for="fname">Voornaam:</label>
                        <input type="text" id="fname" name="fname">
                    </div>
                    <div class="insert">
                        <label for="lname">Achternaam:</label>
                        <input type="text" id="lname" name="lname">
                    </div>
                    <div class="insert">
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="insert">
                        <label for="password">Wachtwoord:</label>
                        <input type="text" id="password" name="password">
                    </div>
                </form>
            </div>
        </section>
        <div class="container">
            <section id="vriendendisplay">

                <h3>Vrienden toevoegen</h3>
                <form action="addfriend.php" class="formstylingdashboard">
                    <label for="username">ID van vriend:</label>
                    <input type="text" id="username" name="friendusername"><br>
                </form>
                <h3>Mijn vrienden</h3>
                <div id="vrienden">

                </div>

            </section>
        </div>
        <section id="evenementen">
            <div class="container">
                <h3>Evenement toevoegen</h3>
                <form action="addevent.php" class="kader">
                    <div class="insert">
                        <label for="ename">Event naam:</label>
                        <input type="text" id="ename" name="ename" required>
                    </div>
                    <div class="insert">
                        <label for="ebeschrijving">Event beschrijving:</label>
                        <textarea id="ebeschrijving" name="ebeschrijving" rows="4" cols="50"></textarea>
                    </div>
                    <div class="insert">
                        <label for="eadres">Adres:</label>
                        <input type="text" id="eadres" name="eadres" required>
                    </div>
                    <div class="insert">
                        <label for="eafbeelding">Afbeelding:</label>
                        <input type="text" id="eafbeelding" name="eafbeelding" required>
                    </div>
                    <input type="submit">
                </form>
                <h3>Mijn evenementen</h3>
                <div id="myevents"></div>
            </div>
        </section>
        <?php
    } else {
        ?>

        <h1>Log in om je dashboard te kunnen beheren</h1>

        <?php
    }
    ?>

</main>

<footer>

</footer>


</body>
</html>