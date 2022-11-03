<?php
$hostname = "5.181.134.167";
$servername = "s5_Testserver";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$send = null;
$message = null;

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? (string)$_POST['name'] : '';
$lastname = isset($_POST['lastname']) ? (string)$_POST['lastname'] : '';
$email = isset($_POST['email']) ? (string)$_POST['email'] : '';
$psw = isset($_POST['psw']) ? (string)$_POST['psw'] : '';


if (isset($_POST['btnSubmit'])) {
    $send = true;
}
if ($send) {
    $count = "SELECT * FROM eventrsignup WHERE email = '$email' ";
    if ($conn->query($count)->num_rows == 0) {
        $hash_psw = password_hash($psw, PASSWORD_DEFAULT);

        $sql = "INSERT INTO eventrsignup (firstname, lastname, email, password)
        VALUES ('$name', '$lastname', '$email', '$hash_psw')";
        if ($conn->query($sql) === TRUE) {
            $message = "Your account is created, welcome to Event-R";
        }

    } else {
        $message = "Email is already in use, log in or try with a different e-mail";
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="resources/icofont.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
            integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
            integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
        <title>Event-R</title>

    </head>

    <body>
        <header>
            <nav>
                <div class="nav-top">
                    <img class="logo" src="resources/Logo.png" height="64" alt="logo">
                    <a class="menu-icon" href="javascript:void(0);" onclick="myFunction()"><img
                            src="resources/navigation-menu.svg" width="32" class="rotate" alt="menu"></a>
                </div>

                <ul id="myLinks">
                    <li class="button-link"> <button id="login">Login</button></li>
                    <li class="button-link"> <button id="register">Register</button></li>
                    <li><a href="">HOME</a></li>
                    <li><a href="events">MY EVENTS</a></li>
                    <li><a href="./account">MY ACOUNT</a></li>
                    <li><a href="about">ABOUT</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="popUpLogin" class="popUp">

                <form class="popUp-content" id="formLogin" action="./php/login.php" method="post">

                    <div class="container">
                        <div class="top-bar">
                            <h1>Login</h1>
                            <span class="spanClose" id="spanCloseLogin" title="Close popUp">&times;</span>
                        </div>
                        <p>Please fill in this form to log in to your account.</p>
                        <hr>

                        <div class="grid">
                            <div class="email">
                                <label for="emailLogin"><b class="emailText">Email</b></label>
                                <input class="emailInput" type="text" id="emailLogin" placeholder="Enter Email" name="email" required>
                                <p id="reult"></p>
                            </div>
                            <div class="password">
                                <label for="pswLogin"><b>Password</b></label>
                                <input type="password" id="pswLogin" placeholder="Enter Password" name="psw" required>
                            </div>
                            <div class="cancel">
                                <button id="buttonCancelLogin" type="button">Cancel</button>
                            </div>
                            <div class="signup">
                                <button id="buttonSignupLogin" type="submit" class="signup">Login</button>
                            </div>
                        </div>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                            Remember me
                        </label>
                    </div>

                </form>
            </div>
            <div id="popUpRegister" class="popUp">

                <form class="popUp-content" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="container">
                        <div class="top-bar">
                            <h1>Sign Up</h1>
                            <span class="spanClose" id="spanClose" title="Close popUp">&times;</span>
                        </div>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <div class="grid">
                            <div class="first-name">
                                <label for="name"><b>Name</b></label>
                                <input type="text" id="name" placeholder="Enter Name" name="name" required>
                            </div>
                            <div class="last-name">
                                <label for="lastname"><b>Lastname</b></label>
                                <input type="text" id="lastname" placeholder="Enter Last name" name="lastname" required>
                            </div>
                            <div class="email">
                                <label id="emailText" for="email"><b>Email</b></label>
                                <input class="emailInput" type="text" id="email" placeholder="Enter Email" name="email" required>
                                <h2 id="result"></h2>
                            </div>
                            <div class="password">
                                <label for="psw"><b>Password</b></label>
                                <input type="password" id="psw" placeholder="Enter Password" name="psw" required>
                            </div>
                            <div class="repeat-password">
                                <label id="pswR" for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" id="psw-repeat" onchange="checkPsw()"
                                    placeholder="Repeat Password" name="psw-repeat" required>
                            </div>
                            <div class="cancel">
                                <button id="buttonCancel" type="button">Cancel</button>
                            </div>
                            <div class="signup">
                                <button id="buttonSignup" name="btnSubmit" type="submit" class="signup">Sign Up</button>
                            </div>
                        </div>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                            Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                                Privacy</a>.
                        </p>
                    </div>

                </form>
            </div>
            <script src="./javascript/popUp.js"></script>
            <?php
            if ($send){
                ?>
                <section>
                    <span class="message error"><?php echo $message; ?></span>
                </section>
                <?php
            }
            ?>

            <section class="main-event">
                <div class="main-wrapper">
                    <h1>Event Naam</h1>
                    <a class="link-button" href="">visit</a>

                    <div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sint, totam. Aliquid
                            corporis
                            dignissimos hic iure laudantium magni natus omnis sed, voluptas? Aliquam aut cum distinctio
                            dolor
                            dolorum eligendi fugiat iste iure minus mollitia nobis, nulla porro quia quisquam
                            repellendus,
                            reprehenderit sunt ut voluptatum? Enim nobis nulla officia omnis quas soluta! Ad aut culpa
                            cum
                            delectus
                            deleniti dolorum facilis, illo impedit ipsam maxime nam necessitatibus odit provident quia
                            repellat
                            temporibus voluptatibus? Delectus dolorum qui rerum tempora vel. Ipsa, recusandae, repellat.
                        </p>
                        <img src="https://picsum.photos/300/360" alt="foto van evenement">
                        <div id="map"></div>
                        <script src="./javascript/mapView.js"></script>
                    </div>
                </div>
            </section>
            <section>
                <div class="main-wrapper">
                    <ul class="event-list">
                        <li>
                            <h2>event</h2>
                            <img src="https://picsum.photos/128/128" alt=""><a class="link-button" href="">Go to</a>
                        </li>
                        <li>
                            <h2>event</h2>
                            <img src="https://picsum.photos/128/128" alt=""><a class="link-button" href="">Go to</a>
                        </li>
                        <li>
                            <h2>event</h2>
                            <img src="https://picsum.photos/128/128" alt=""><a class="link-button" href="">Go to</a>
                        </li>
                        <li>
                            <h2>event</h2>
                            <img src="https://picsum.photos/128/128" alt=""><a class="link-button" href="">Go to</a>
                        </li>
                        <li>
                            <h2>event</h2>
                            <img src="https://picsum.photos/128/128" alt=""><a class="link-button" href="">Go to</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section>
                <div class="main-wrapper">
                    <h1>About this site.</h1>
                    <div class="flex-container">
                        <p class="side-text">This site is a handy tool for organising events with your friends or colleagues. You can
                            easily
                            create an event by signing in a clicking the create event button. When you have your event
                            set
                            up you can share the event by adding friends and inviting them.</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/onnMWR8PW9A"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <!-- <div id="player"></div> -->
                    <!-- <script>
                        // 2. This code loads the IFrame Player API code asynchronously.
                        var tag = document.createElement('script');

                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        // 3. This function creates an <iframe> (and YouTube player)
                        //    after the API code downloads.
                        var player;
                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '390',
                                width: '640',
                                videoId: 'onnMWR8PW9A?autoplay=1',
                                loop: '1',
                                playerVars: {
                                    playlist: 'onnMWR8PW9A?autoplay=1',
                                    loop: 1,
                                    autoplay: 1
                                }
                                // events: {
                                //     'onReady': onPlayerReady,
                                // }
                            });
                        }

                        // 4. The API will call this function when the video player is ready.
                        // function onPlayerReady(event) {
                        //     console.log("ready");
                        //     event.target.playVideo();
                        // }
                    </script> -->
                </div>
            </section>


        </main>

        <footer>

        </footer>

    </body>

</html>