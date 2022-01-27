<?php
include "dbconnect.php";

echo "here";
$EventName = $_POST['eventName'];
$EventLocation = $_POST['eventLocation'];
$EventContact = $_POST['eventContact'];
$EventDescription = $_POST['eventDescription'];

$fullInsert = "INSERT INTO `nopovertyevents` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";
$db->query($fullInsert);


?>