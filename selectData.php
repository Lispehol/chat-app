<?php

require('settings2.php');

//create connetion
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if(!$conn) {
    die('Failed to connect to server: ' . mysqli_error());
}
$currenttime = date("Y-m-d h:i:s");

$sql = "SELECT * FROM chat2 where pvm > now()  - interval 3 hour;"; //ORDER BY id DESC limit 8     where time > now()  - interval 2 hour; where time> now() - interval 1 week
$result = mysqli_query($conn, $sql);

while($getData=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $chatmessage = $getData['viesti'];
    $chatname = $getData['nimi'];
    $chattime = $getData['pvm'];


    echo "<b>" .$chatname. "</b><br>";
    echo  '<i>"' .$chatmessage. '"</i> ';
    echo "[" .$chattime. "] <br><br>";
    
}
$conn->close();
?>