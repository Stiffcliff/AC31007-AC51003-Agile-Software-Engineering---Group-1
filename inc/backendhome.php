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
<option hidden disabled selected value="0"> -- select an option -- </option>
    <option value="1">Add</option> 
    <option value="2">Edit</option>
    <option value="3">Remove</option>
</select>


    <div id='addEverything'>
        <script> var addTableName </script>
        <select name="adddrop" id="adddrop" onchange=addFunction(addTableName)>
        <option hidden disabled selected value> -- select an option -- </option>
            <option value="1">nopovertyevents</option> 
            <option value="2">goal 2</option>
            <option value="3">goal 3</option>
            <option value="4">goal 4</option> 
            <option value="5">goal 5</option>
            <option value="6">goal 6</option>
            <option value="7">goal 7</option> 
            <option value="8">goal 8</option>
            <option value="9">goal 9</option>
            <option value="10">goal 10</option> 
            <option value="11">goal 11</option>
            <option value="12">goal 12</option>
            <option value="13">goal 13</option> 
            <option value="14">goal 14</option>
            <option value="15">goal 15</option>
            <option value="16">goal 16</option> 
            <option value="17">goal 17</option>
            
        </select>
    
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

<div id='editEverything'>
    <h1>EDIT</h1>
</div>

<div id='removeEverything'>
    <h1>Remove</h1>
</div>

<select name="tabledrop" id="tabledrop" onchange=tableFunction()>
<option hidden disabled selected value> -- select an option -- </option>
    <option value="1">nopovertyevents</option> 
    <option value="2">goal 2</option>
    <option value="3">goal 3</option>
    <option value="4">goal 4</option> 
    <option value="5">goal 5</option>
    <option value="6">goal 6</option>
    <option value="7">goal 7</option> 
    <option value="8">goal 8</option>
    <option value="9">goal 9</option>
    <option value="10">goal 10</option> 
    <option value="11">goal 11</option>
    <option value="12">goal 12</option>
    <option value="13">goal 13</option> 
    <option value="14">goal 14</option>
    <option value="15">goal 15</option>
    <option value="16">goal 16</option> 
    <option value="17">goal 17</option>
    
</select>

<div id='list'>
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

        console.log(dropdownvalue);

        if (dropdownvalue == "0"){
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "none";
        }
        
        if (dropdownvalue == "1") {
            addEverythingControl.style.display = "block";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "none";
            console.log("add unhidden");
        }
        if (dropdownvalue == "2") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "block";
            removeEverythingControl.style.display = "none";
            console.log("edit unhidden");
        }
        if (dropdownvalue == "3") {
            addEverythingControl.style.display = "none";
            editEverythingControl.style.display = "none";
            removeEverythingControl.style.display = "block";
            console.log("remove unhidden");
        } 
    }

    Function tableFunction(){
        var tableID = document.getElementById("tabledrop");
        var tablevalue = tableID.options[tableID.selectedIndex].text;
        console.log(tablevalue);

    }

    Function addFunction(addTableName){
        var addID = document.getElementById("adddrop");
        var addvalue = addID.options[addID.selectedIndex].text;
        console.log(addvalue);
        return addTableName;


    }

    

</script>
