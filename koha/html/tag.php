<?php

$bcode = $_POST["barcode"];
$rfid = $_POST["rfid"];
$shelf=$_POST["location"];
require_once("connection.php");

$sql = "INSERT INTO rfid VALUES ('".$rfid."','".$bcode."',".$shelf.")";
$sql2="delete from get_tag ";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
$con->query($sql2);
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
