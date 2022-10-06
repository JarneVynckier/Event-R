<?php
$hostname = "5.181.134.167";
$servername = "s5_Testserver";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$psw = $_REQUEST['psw'];

$sql = "INSERT INTO eventrsignup (firstname, lastname, email, password)
    VALUES ('$name', '$lastname', '$email', '$psw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





