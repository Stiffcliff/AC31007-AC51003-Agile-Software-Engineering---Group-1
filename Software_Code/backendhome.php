<?php
include("dbconnect.php"); //including database connect script 
?>


<style>

#addEverything { /* styling for add division */
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightgreen;
  margin-top: 20px;
}

#editEverything { /* styling for edit division */
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: orange;
  margin-top: 20px;
}

#removeEverything { /* styling for remove division */
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: red;
  margin-top: 20px;
}
</style>

<!--dropdown box to select option-->
<select name="dropdown" id="dropdown" onchange=choiceFunction()> <!--runs function on dropbox change-->
    <option hidden disabled selected value> -- select an option -- </option>
    <option value="1">Add</option>
    <option value="2">Edit</option>
    <option value="3">Remove</option>
</select>

    <!--divison for add function-->
    <div id='addEverything'> <!--runs function on dropbox change-->
        <form method="post" id="addForm"> <!--form running post method for passing to add php script-->
            <div class="container-fluid" id="eventContainer">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col">
                            <select name="eventTable" id="eventTable"> <!--Dropdown select for table-->
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
                        <div class="col"> <!--Event name input box-->
                            <input type="text" id="eventName" name="eventName" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event location input box-->
                            <input type="text" id="eventLocation" name="eventLocation" class="form-control" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event contact input box-->
                            <input type="text" id="eventContact" name="eventContact" class="form-control" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><!--Event description input box-->
                            <input type="text" id="eventDescription" name="eventDescription" class="form-control" placeholder="Description" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center"> <!--submit button for add form-->
                <input type="submit" name="submit" value="Submit">
        <!--        <button type="submit" name="insert" class="btn btn-secondary btn-lg">Add Record</button>-->
            </div>
        </form>
    </div>

<!--divison for edit function-->    
<div id='editEverything'>
<h1>Edit</h1>
    <form method="post" id="editForm"> <!--form for edit function-->
        <div class="container-fluid" id="eventContainer">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col">
                        <select name="eventTable" id="eventTable"> <!--dropdown box for choosing table to edit-->
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
                    <div class="col"> <!--Event ID input box-->
                        <input type="text" id="eventId" name="eventId" class="form-control" placeholder="Event ID" required>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event name input box-->
                            <input type="text" id="eventName" name="eventName" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event location input box-->
                            <input type="text" id="eventLocation" name="eventLocation" class="form-control" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event contact input box-->
                            <input type="text" id="eventContact" name="eventContact" class="form-control" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <!--Event description input box-->
                            <input type="text" id="eventDescription" name="eventDescription" class="form-control" placeholder="Description" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center"> <!--Submit button for edit-->
            <input type="submit" name="submitEdit" value="Submit edit">
        </div>
    </form>
</div>

<div id='removeEverything'> <!--remove event division-->
    <h1>Remove</h1>
    <form method="post" id="removeForm"> <!--remove form-->
        <div class="container-fluid" id="eventContainer">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col">
                        <select name="eventTable" id="eventTable"> <!--dropdown box for selecting-->
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
                    <div class="col"> <!--event id input box-->
                        <input type="text" id="eventId" name="eventId" class="form-control" placeholder="Event ID" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center"> <!--delete submit button-->
            <input type="submit" name="submitRemove" value="Submit delete">
        </div>
    </form>
</div>

<form method="post" id="displayForm"> <!--form for displaying the table on the page-->
    <select name="tabledrop" id="tabledrop"> <!--dropdown box listing tables-->
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
    <div class="col text-center"> <!--submit button for displaying table-->
        <input type="submit" name="submitDisplay" value="Display table">
        <!--        <button type="submit" name="insert" class="btn btn-secondary btn-lg">Add Record</button>-->
    </div>
</form>

<div id='list'>
</div>

<?php
    include "dbconnect.php"; //connecting doconnect script

    if ( isset( $_POST['submit'] ) ) { //post form script for add functionality

        $EventTable = $_POST['eventTable'];
        $EventName = $_POST['eventName'];
        $EventLocation = $_POST['eventLocation'];
        $EventContact = $_POST['eventContact'];
        $EventDescription = $_POST['eventDescription']; //setting the variables in php passed from the page

        $fullInsert = "INSERT INTO `$EventTable` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES (NULL,'$EventName','$EventLocation','$EventContact','$EventDescription')";
        //writing sql statement to a variable
        echo $fullInsert;

        $db->query($fullInsert); //running the query on the database

        readfile("backendhome.php"); //refreshing the page
    }
?>

<?php
include "dbconnect.php";

if ( isset( $_POST['submitRemove'] ) ) {//post form script for remove functionality

    $EventTable = $_POST['eventTable'];
    $EventId = intval($_POST['eventId']);
    $EventName = $_POST['eventName'];
    $EventLocation = $_POST['eventLocation'];
    $EventContact = $_POST['eventContact'];
    $EventDescription = $_POST['eventDescription']; //setting the variables in php passed from the page

    $fullDelete = "DELETE FROM `$EventTable` WHERE EventID=$EventId"; //writing sql statement to a variable
    
    $db->query($fullDelete);  //running the query on the database

    echo $fullDelete;


    readfile("backendhome.php"); //refreshing the page
}
?>

<?php
include "dbconnect.php";

if ( isset( $_POST['submitEdit'] ) ) {

    $EventTable = $_POST['eventTable'];
    $EventId = intval($_POST['eventId']);
    $EventName = $_POST['eventName'];
    $EventLocation = $_POST['eventLocation'];
    $EventContact = $_POST['eventContact'];
    $EventDescription = $_POST['eventDescription']; //setting the variables in php passed from the page

    $fullDelete = "DELETE FROM `$EventTable` WHERE EventID=$EventId"; //writing delete sql statement to a variable
    
    $fullInsert = "INSERT INTO `$EventTable` (`EventID`, `EventName`, `EventLocation`, `EventContact`, `EventDescription`) VALUES ('$EventID','$EventName','$EventLocation','$EventContact','$EventDescription')";
    //writing add sql statement to a variable

    $db->query($fullDelete);
    $db->query($fullInsert); //running both sql statements (could need multi query)

    readfile("backendhome.php");//refreshing the page
}
?>

<script> //start of javascript 

    document.getElementById("addForm").reset(); //resets add form

    var addEverythingControl = document.getElementById("addEverything"); 
    var editEverythingControl = document.getElementById("editEverything");
    var removeEverythingControl = document.getElementById("removeEverything"); //assigning add/edit/remove to variables

    addEverythingControl.style.display = "none";
    editEverythingControl.style.display = "none";
    removeEverythingControl.style.display = "none"; //hiding sections on page start

    
    function choiceFunction() {
        addEverythingControl = document.getElementById("addEverything");
        editEverythingControl = document.getElementById("editEverything");
        removeEverythingControl = document.getElementById("removeEverything"); //assigning add/edit/remove to variables

        var dropdownID = document.getElementById("dropdown"); //setting dropdown box to variable
        var dropdownvalue = dropdownID.value; //setting value of selected dropdown to variable

        if (dropdownvalue == "1") {
            addEverythingControl.style.display = "block";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "none"; //showing add section
        }
        
        if (dropdownvalue == "2") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "block";
            removeEverythingControl.style.display = "none";//showing edit section
        }
        if (dropdownvalue == "3") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "block";//showing remove section
        }
    }

    function tableFunction(){
        var tableID = document.getElementById("tabledrop"); //sets tableID to dropdown box element
        var tablevalue = tableID.options[tableID.selectedIndex].text; //sets value of dropdown to variable
        console.log(tablevalue);
        //need to pass tablevalue to php and mysql command to show the selected table - tablevalue="nopovertyevents" etc
    }

    function addFunction(){
        var addID = document.getElementById("adddrop"); //sets tableID to dropdown box element
        var addvalue = addID.options[addID.selectedIndex].text; //sets value of dropdown to variable
        console.log(addvalue);
        //need to pass addvalue to php and mysql command to insert into selected table - addvalue="nopovertyevents" et
    }

    

</script>

<?php
if ( isset( $_POST['submitDisplay'] ) ) { //submit script for table display
    $tableName = $_POST['tabledrop'];
    $sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM `$tableName`";
    //setting the sql statement to a variable
    $result = $db->query($sql); //running query

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
    //displaying table

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

    $db->close(); //close connection to database
}

?>

