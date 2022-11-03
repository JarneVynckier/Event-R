<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$userid = '4';
$idfriend = $_GET["friendusername"];
echo $idfriendstring;
echo $idfriend;
// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "INSERT INTO eventrfriends (userid, useridfriend) VALUES ('4', '$idfriend')";
$conn->query($sql);

header("Location: ../account");
?>

