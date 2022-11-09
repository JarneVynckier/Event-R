<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

session_start();

$userid = $_SESSION["iduser"];
$idfriend = $_GET["friendusername"];
echo $idfriend;
// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "INSERT INTO eventrfriends (userid, useridfriend) VALUES ('$userid', '$idfriend')";
$conn->query($sql);

header("Location: ../account");
?>

