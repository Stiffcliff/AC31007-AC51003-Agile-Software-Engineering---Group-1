<?php
include("dbconnect.php");  
?>

<form name="eventForm" method="post">
    <div class="container-fluid" id="eventContainer">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col">
                    <input type="text" id="eventName" name="eventName" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="eventLocation" name="eventLocation" class="form-control" placeholder="Location" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="eventContact" name="eventContact" class="form-control" placeholder="Contact" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="eventDescription" name="eventDescription" class="form-control" placeholder="Description" required>
                </div>
            </div>
        </div>
    </div>
    <div class="col text-center">
        <input type="submit" value="Submit">
<!--        <button type="submit" name="insert" class="btn btn-secondary btn-lg">Add Record</button>-->
    </div>
</form>

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

<?php
?>