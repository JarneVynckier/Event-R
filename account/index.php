<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <title>Account</title>
    <link rel="stylesheet" href="../css/account.css">
</head>
<body>

<?php
$loggedin = "true";
?>

<header>

</header>
<div class="container">
    <main>
        <h1>Mijn account</h1>

        <?php
            if ($loggedin == "true"){
                ?>
                <section>
                    <h2>Mijn gegevens</h2>
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
                </section>
                <section>
                    <h2>Mijn vrienden</h2>
                    <div class="vrienden" id="vrienden">
                </section>
                <section>
                    <h2>Mijn evenementen</h2>
                </section>
                <?php
            }
            else{
                ?>

                <h1>Log in om je dashboard te kunnen beheren</h1>

                <?php
            }
        ?>

    </main>
</div>
<footer>

</footer>

<script src="getfriends.js" ></script>
</body>
</html>