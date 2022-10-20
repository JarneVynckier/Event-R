<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

$email = $_REQUEST['email'];
$psw = $_REQUEST['psw'];

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);



$sql = "SELECT password FROM eventrsignup WHERE email = '$email'";
$result = $conn->query($sql);
foreach($result as $key => $value){
    if(password_verify('$psw', '$value'));
    {
        header("Location: ../");
    }
}