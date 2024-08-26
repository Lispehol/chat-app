<?php
    require('settings2.php');

    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection
    if(!$conn) {
        die('Failed to connect to server: ' . mysqli_error());
    }

    //data is imported from main file
    $txt = $_GET['txt'];
    $name = $_GET['name'];

    $time = date("Y-m-d h:i:s");
    //data is exported to the database with sql
    $sql = "INSERT INTO chat2 (nimi, viesti, pvm) values ('$name', '$txt', '$time')";

    if($conn->query($sql) == TRUE){
        echo "Viesti lähetetty.";
    } else {
            echo "Error: " .sql. "<br>" . $conn->error;
        }
    $conn->close();
?>