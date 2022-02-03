<?php
include("dbconnect.php");  
?>


<style>
#addEverything {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightgreen;
  margin-top: 20px;
}

#editEverything {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: orange;
  margin-top: 20px;
}

#removeEverything {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: red;
  margin-top: 20px;
}
</style>

<select name="dropdown" id="dropdown" onchange=choiceFunction()>
    <option hidden disabled selected value> -- select an option -- </option>
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
                            <select name="eventTable" id="eventTable">
                                <option hidden disabled selected value> Select table name</option>
                                <option value="nopovertyevents">nopovertyevents - Goal 1</option>
                                <option value="zerohungerevents">zerohungerevents - Goal 2</option>
                                <option value="goodhealthevents">goodhealthevents - Goal 3</option>
                                <option value="qualityeduevents">qualityeduevents - Goal 4</option>
                                <option value="genderequalityevents">genderequalityevents - Goal 5</option>
                                <option value="cleanwaterevents">cleanwaterevents - Goal 6</option>
                                <option value="cleanenergyevents">cleanenergyevents - Goal 7</option>
                                <option value="ecogrowthevents">ecogrowthevents - Goal 8</option>
                                <option value="innovationevents">innovationevents - Goal 9</option>
                                <option value="inequalevents">inequalevents - Goal 10</option>
                                <option value="sustainableevents">sustainableevents - Goal 11</option>
                                <option value="resconsevents">resconsevents - Goal 12</option>
                                <option value="protectevents">protectevents - Goal 13</option>
                                <option value="lifebelowevents">lifebelowevents - Goal 14</option>
                                <option value="lifeonlandevents">lifeonlandevents - Goal 15</option>
                                <option value="peaceevents">peaceevents - Goal 16</option>
                                <option value="partnerevents">partnerevents - Goal 17</option>
                            </select>
                        </div>
                    </div>
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

<div id='editEverything'>
    <h1>EDIT</h1>
</div>

<div id='removeEverything'>
    <h1>Remove</h1>
    <form method="post" id="removeForm">
        <div class="container-fluid" id="eventContainer">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col">
                        <select name="eventTable" id="eventTable">
                            <option hidden disabled selected value> Select table name</option>
                            <option value="nopovertyevents">nopovertyevents - Goal 1</option>
                            <option value="zerohungerevents">zerohungerevents - Goal 2</option>
                            <option value="goodhealthevents">goodhealthevents - Goal 3</option>
                            <option value="qualityeduevents">qualityeduevents - Goal 4</option>
                            <option value="genderequalityevents">genderequalityevents - Goal 5</option>
                            <option value="cleanwaterevents">cleanwaterevents - Goal 6</option>
                            <option value="cleanenergyevents">cleanenergyevents - Goal 7</option>
                            <option value="ecogrowthevents">ecogrowthevents - Goal 8</option>
                            <option value="innovationevents">innovationevents - Goal 9</option>
                            <option value="inequalevents">inequalevents - Goal 10</option>
                            <option value="sustainableevents">sustainableevents - Goal 11</option>
                            <option value="resconsevents">resconsevents - Goal 12</option>
                            <option value="protectevents">protectevents - Goal 13</option>
                            <option value="lifebelowevents">lifebelowevents - Goal 14</option>
                            <option value="lifeonlandevents">lifeonlandevents - Goal 15</option>
                            <option value="peaceevents">peaceevents - Goal 16</option>
                            <option value="partnerevents">partnerevents - Goal 17</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" id="eventId" name="eventId" class="form-control" placeholder="Event ID" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <input type="submit" name="submitRemove" value="Submit delete">
        </div>
    </form>
</div>

<form method="post" id="displayForm">
    <select name="tabledrop" id="tabledrop">
        <option hidden disabled selected value> Select a table </option>
        <option value="nopovertyevents">nopovertyevents - Goal 1</option>
        <option value="zerohungerevents">zerohungerevents - Goal 2</option>
        <option value="goodhealthevents">goodhealthevents - Goal 3</option>
        <option value="qualityeduevents">qualityeduevents - Goal 4</option>
        <option value="genderequalityevents">genderequalityevents - Goal 5</option>
        <option value="cleanwaterevents">cleanwaterevents - Goal 6</option>
        <option value="cleanenergyevents">cleanenergyevents - Goal 7</option>
        <option value="ecogrowthevents">ecogrowthevents - Goal 8</option>
        <option value="innovationevents">innovationevents - Goal 9</option>
        <option value="inequalevents">inequalevents - Goal 10</option>
        <option value="sustainableevents">sustainableevents - Goal 11</option>
        <option value="resconsevents">resconsevents - Goal 12</option>
        <option value="protectevents">protectevents - Goal 13</option>
        <option value="lifebelowevents">lifebelowevents - Goal 14</option>
        <option value="lifeonlandevents">lifeonlandevents - Goal 15</option>
        <option value="peaceevents">peaceevents - Goal 16</option>
        <option value="partnerevents">partnerevents - Goal 17</option>
    </select>
    <div class="col text-center">
        <input type="submit" name="submitDisplay" value="Display table">
        <!--        <button type="submit" name="insert" class="btn btn-secondary btn-lg">Add Record</button>-->
    </div>
</form>

<div id='list'>
</div>

<?php
    include "dbconnect.php";

    if ( isset( $_POST['submit'] ) ) {

        $EventTable = $_POST['eventTable'];
        $EventName = $_POST['eventName'];
        $EventLocation = $_POST['eventLocation'];
        $EventContact = $_POST['eventContact'];
        $EventDescription = $_POST['eventDescription'];

        $fullInsert = "INSERT INTO `$EventTable` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";

        echo $fullInsert;

        $db->query($fullInsert);

        readfile("backendhome.php");
    }
?>

<?php
include "dbconnect.php";

if ( isset( $_POST['submitRemove'] ) ) {

    $EventTable = $_POST['eventTable'];
    $EventId = intval($_POST['eventId']);

    $fullDelete = "DELETE FROM `$EventTable` WHERE EventID=$EventId";

    echo $fullDelete;

    $db->query($fullDelete);

    readfile("backendhome.php");
}
?>

<script>
    document.getElementById("addForm").reset();

    var addEverythingControl = document.getElementById("addEverything");
    var editEverythingControl = document.getElementById("editEverything");
    var removeEverythingControl = document.getElementById("removeEverything");

    addEverythingControl.style.display = "none";
    editEverythingControl.style.display = "none";
    removeEverythingControl.style.display = "none";

    
    function choiceFunction() {
        addEverythingControl = document.getElementById("addEverything");
        editEverythingControl = document.getElementById("editEverything");
        removeEverythingControl = document.getElementById("removeEverything");

        var dropdownID = document.getElementById("dropdown");
        var dropdownvalue = dropdownID.value;

        if (dropdownvalue == "1") {
            addEverythingControl.style.display = "block";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "none";
        }
        
        if (dropdownvalue == "2") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "block";
            removeEverythingControl.style.display = "none";
        }
        if (dropdownvalue == "3") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "block";
        }
    }

    function tableFunction(){
        var tableID = document.getElementById("tabledrop");
        var tablevalue = tableID.options[tableID.selectedIndex].text;
        console.log(tablevalue);
        //need to pass tablevalue to php and mysql command to show the selected table - tablevalue="nopovertyevents" etc
    }

    function addFunction(){
        var addID = document.getElementById("adddrop");
        var addvalue = addID.options[addID.selectedIndex].text;
        console.log(addvalue);
        //need to pass addvalue to php and mysql command to insert into selected table - addvalue="nopovertyevents" et
    }

    

</script>

<?php
if ( isset( $_POST['submitDisplay'] ) ) {
    $tableName = $_POST['tabledrop'];
    $sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM `$tableName`";
    $result = $db->query($sql);

    echo "<table class='table'> 
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Location</th>
                    <th scope='col'>Contact</th>
                    <th scope='col'>Description</th>
                </tr>
            </thead>
            <tbody>";

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'></th>";
            echo "<td>". $row['EventID'] ."</td>";
            echo "<td>". $row['EventName'] ."</td>";
            echo "<td>". $row['EventLocation'] ."</td>";
            echo "<td>". $row['EventContact'] ."</td>";
            echo "<td>". $row['EventDescription'] ."</td>";
            echo "</tr>";
//            echo "<br> ID:" . $row["EventName"] . " Name:" . $row["EventName"] . " Location:" . $row["EventLocation"] . " Contact:" . $row["EventContact"] . " Description:" . $row["EventDescription"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    echo "</tbody>";
    echo "</table>";

    $db->close();
}

?>

