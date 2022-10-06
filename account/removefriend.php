<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$userid = '4';
$idfriend = $_GET['idfriend'];
$idfriendstring = strval($idfriend);
echo $idfriendstring;
echo $idfriend;
// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "DELETE FROM eventrfriends WHERE useridfriend = $idfriendstring";
$conn->query($sql);

header("Location: ../account");
?>