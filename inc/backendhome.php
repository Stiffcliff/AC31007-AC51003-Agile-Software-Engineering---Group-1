<?php
include("dbconnect.php");  
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(document).ready(function(){
    $('#purpose').on('change', function () {
    if(this.value === "1"){
        $("#business").show();
    } else {
        $("#business").hide();
    }
});
});
</script>

<body>
<select id='purpose'>
<option value="0">Personal use</option>
<option value="1">Business use</option>
<option value="2">Passing on to a client</option>
</select>
<div style='display:none;' id='business'>Business Name<br/>&nbsp;
<br/>&nbsp;
    <h1>business</h1>
    <input type='text' class='text' name='business' value size='20' />
    <br/>
</div>
</body>

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

//`HolidayID`,`Name`,`LocationID`,`SeasonID`,`Availability`, `Price`, `TransportID`, `Description`, `Requirements`, `Rating`

$fullInsert = "INSERT INTO `nopovertyevents` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";

$execute = mysql_query($fullInsert);

?>

<?php
?>