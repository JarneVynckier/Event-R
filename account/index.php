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
session_start();
if (isset($_SESSION["loggedin"])) {
    $loggedin = $_SESSION['loggedin'];
} else {
    $loggedin = 'false';
}
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
            <li><a href="../">HOME</a></li>
            <li><a href="../events">MY EVENTS</a></li>
            <li><a href="#">MY ACOUNT</a></li>
            <li><a href="../about">ABOUT</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>My account</h1>
    <nav>
        <button id="btngegevens" onclick="displayGegevens()">personal data</button>
        <button id="btnvrienden" onclick="displayVrienden()">Friends</button>
        <button id="btnevenementen" onclick="displayEvenementen()">Events</button>
    </nav>
    <?php
    if ($loggedin == "true") {
        ?>
        <section id="gegevens">
            <div class="container">
                <form class="kader">
                    <div class="insert">
                        <label for="fname">Fist name:</label>
                        <input type="text" id="fname" name="fname" value="<?php if (isset($_SESSION["firstnameuser"])) {
                            echo $_SESSION["firstnameuser"];
                        } ?>" disabled>
                    </div>
                    <div class="insert">
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname" value="<?php if (isset($_SESSION["lastnameuser"])) {
                            echo $_SESSION["lastnameuser"];
                        } ?>" disabled>
                    </div>
                    <div class="insert">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id" value="<?php if (isset($_SESSION["iduser"])) {
                            echo $_SESSION["iduser"];
                        } ?>" disabled>
                    </div>
                </form>
            </div>
        </section>
        <div class="container">
            <section id="vriendendisplay">

                <h3>Add friends</h3>
                <form action="addfriend.php" class="formstylingdashboard">
                    <label for="username">ID of friend:</label>
                    <input type="text" id="username" name="friendusername"><br>
                </form>
                <h3>My friends</h3>
                <div id="vrienden">

                </div>

            </section>
        </div>
        <section id="evenementen">
            <div class="container">
                <h3>Add event</h3>
                <form action="addevent.php" class="kader">
                    <div class="insert">
                        <label for="ename">Event name:</label>
                        <input type="text" id="ename" name="ename" required>
                    </div>
                    <div class="insert">
                        <label for="ebeschrijving">Event description:</label>
                        <textarea id="ebeschrijving" name="ebeschrijving" rows="4" cols="50"></textarea>
                    </div>
                    <div class="insert">
                        <label for="eadres">Adres:</label>
                        <input type="text" id="eadres" name="eadres" required>
                    </div>
                    <div class="insert">
                        <label for="eafbeelding">Picture:</label>
                        <input type="text" id="eafbeelding" name="eafbeelding" required>
                    </div>
                    <div class="insert">
                        <label for="etijdstip">Time:</label>
                        <input type="date" id="etijdstip" name="etijdstip" required>
                    </div>
                    <input type="submit">
                </form>
                <h3>My events</h3>
                <div id="myevents"></div>
            </div>
        </section>
        <?php
    } else {
        ?>

        <h1>Login to use your dashboard!</h1>

        <?php
    }
    ?>

</main>

<footer>

</footer>


</body>
</html>