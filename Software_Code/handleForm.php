<html>
Something
</html>
<?php
include "dbconnect.php";

echo "here";
echo $_POST('submit') !== null;
echo $_POST['eventName'];

if ( isset( $_POST['Submit'] ) ) {
    echo "here";
    $EventName = $_POST['eventName'];
    $EventLocation = $_POST['eventLocation'];
    $EventContact = $_POST['eventContact'];
    $EventDescription = $_POST['eventDescription'];

    $fullInsert = "INSERT INTO `nopovertyevents` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";
    echo $fullInsert;
    $db->query($fullInsert);

    readfile("backendhome.php");
}
?>