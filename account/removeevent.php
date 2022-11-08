<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$userid = '4';
$id = $_GET['idevent'];
$ideventstring = strval($id);
echo $ideventstring;
echo $id;
// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "DELETE FROM eventrevents WHERE id = $ideventstring";
$conn->query($sql);

header("Location: ../account");
?>