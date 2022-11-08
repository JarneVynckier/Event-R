<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$userid = '4';
$eventname = $_GET["ename"];
$beschrijving = $_GET["ebeschrijving"];
$adres = $_GET["eadres"];
$afbeelding = $_GET["eafbeelding"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "INSERT INTO eventrevents (userid, titel, beschrijving, adres, afbeelding) VALUES ('$userid', '$eventname', '$beschrijving', '$adres', 'empty')";
$conn->query($sql);

header("Location: ../account");
?>

