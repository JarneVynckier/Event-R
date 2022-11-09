<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

session_start();

$userid = $_SESSION["iduser"];
$eventname = $_GET["ename"];
$beschrijving = $_GET["ebeschrijving"];
$adres = $_GET["eadres"];
$afbeelding = $_GET["eafbeelding"];
$tijdstip = $_GET["etijdstip"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "INSERT INTO eventrevents (userid, titel, beschrijving, adres, afbeelding, tijdstip) VALUES ('$userid', '$eventname', '$beschrijving', '$adres', '$afbeelding', '$tijdstip')";
$conn->query($sql);

header("Location: ../account");
?>

