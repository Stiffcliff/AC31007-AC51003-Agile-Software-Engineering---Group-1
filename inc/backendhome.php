<?php
include("dbconnect.php");  
?>

<style>
#addEverything {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
</style>

<select name="dropdown" onchange=myFunction()>
    <option value="1">Add</option> 
    <option value="2">Edit</option>
    <option value="3">Remove</option>
</select>

<div id='addEverything'>
    <form method="post" id="addForm">
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
            <input type="submit" name="submit" value="Submit">
    <!--        <button type="submit" name="insert" class="btn btn-secondary btn-lg">Add Record</button>-->
        </div>
    </form>
</div>

<?php
    include "dbconnect.php";

    if ( isset( $_POST['submit'] ) ) {

        $EventName = $_POST['eventName'];
        $EventLocation = $_POST['eventLocation'];
        $EventContact = $_POST['eventContact'];
        $EventDescription = $_POST['eventDescription'];

        $fullInsert = "INSERT INTO `nopovertyevents` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";

        $db->query($fullInsert);

        readfile("backendhome.php");
    }
?>

<script>
    document.getElementById("addForm").reset();
    
    function myFunction() {
    var addEverythingControl = document.getElementById("addEverything");
    var dropdownassign = document.getElementById("dropdown");
    var dropdownvalue = dropdownassign.value;
    console.log(dropdownvalue);
    if (dropdownvalue == "1") {
        addEverythingControl.style.display = "block";
        console.log(dropdownvalue);
    }
    if (dropdownvalue == "2") {
        addEverythingControl.style.display = "none";
        console.log(dropdownvalue);
    }
    if (dropdownvalue == "3") {
        addEverythingControl.style.display = "none";
        console.log(dropdownvalue);
    } else {
        addEverythingControl.style.display = "none";
    }
    }

    

</script>
