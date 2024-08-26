<?php

require('settings2.php');

//create connetion
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if(!$conn) {
    die('Failed to connect to server: ' . mysqli_error());
}

//tuodaan tieto muuttujasta päätiedostosta
$txt = $_GET['txt'];
$name = $_GET['name'];

//txt = $_POST['txt'];
//$name = $_POST['name'];
$time = date("Y-m-d h:i:s");
//sql lauseella tietokantaan vienti
$sql = "INSERT INTO chat2 (nimi, viesti, pvm) values ('$name', '$txt', '$time')";

if($conn->query($sql) == TRUE){
    echo "Viesti lähetetty.";
}
    else {
        echo "Error: " .sql. "<br>" . $conn->error;
    }
$conn->close();
?>