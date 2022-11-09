<?php
$servername = "s5_Testserver";
$hostname = "5.181.134.167";
$username = "u5_6lTQBewUTJ";
$password = "Sz=GhVEV!AVTr.CSx8J8lwnZ";

session_start();

$userid = $_SESSION["iduser"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $servername);

$sql = "SELECT id, titel, beschrijving, adres, afbeelding FROM eventrevents WHERE userid = '$userid'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $sendarray = array();
    foreach($result as $key => $value){
        $sendarray[$key]['id'] = $value['id'];
        $sendarray[$key]['titel'] = $value['titel'];
        $sendarray[$key]['beschrijving'] = $value['beschrijving'];
        $sendarray[$key]['adres'] = $value['adres'];
        $sendarray[$key]['afbeelding'] = $value['afbeelding'];
    }
    echo json_encode($sendarray);
}
else{
    echo "NO_EVENTS";
}
?>