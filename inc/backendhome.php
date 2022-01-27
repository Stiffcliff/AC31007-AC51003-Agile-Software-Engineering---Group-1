<?php
include("dbconnect.php");  
?>

<h1>Welcome to backend home page</h1>

<label for="cars">Add, edit or remove:</label>
<select name="choice" id="choice">
<option value="add">add</option>
<option value="edit">edit</option>
<option value="remove">remove</option>
</select>
<br><br>
<input type="submit" value="Submit">

<?php
?>