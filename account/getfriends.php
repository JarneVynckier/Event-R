<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

session_start();

$userid = $_SESSION["iduser"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "SELECT id, useridfriend FROM eventrfriends WHERE userid = '$userid'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $sendarray2 = array();
    foreach($result as $key => $value){
        $idfriend = $value['useridfriend'];
        $sql = "SELECT id, firstname, lastname FROM eventrsignup WHERE id = '$idfriend'";
        $result2 = $conn->query($sql);
        foreach($result2 as $key2 => $value2){
            $sendarray2[$key][$key2]['idfriend'] = $value2['id'];
            $sendarray2[$key][$key2]['firstname'] = $value2['firstname'];
            $sendarray2[$key][$key2]['lastname'] = $value2['lastname'];
        }
    }
    echo json_encode($sendarray2);
}
else{
    echo "NO_FRIEND";
}


?>