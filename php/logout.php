<?php

session_start();
unset($_SESSION["iduser"]);
unset($_SESSION["firstnameuser"]);
unset($_SESSION["lastnameuser"]);
unset($_SESSION["loggedin"]);

header("Location: ../")

?>