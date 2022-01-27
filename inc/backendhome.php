<?php
include("dbconnect.php");  
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(document).ready(function(){
    $('#choice').on('change', function() {
      if ( this.value == 'add')
      
      {
        $("#add").show();
        $("#edit").hide();
        $("#remove").hide();
      }
      if ( this.value == 'edit')
      {
        $("#add").hide();
        $("#edit").show();
        $("#remove").hide();
      }
      if ( this.value == 'remove')
      {
        $("#add").hide();
        $("#edit").hide();
        $("#remove").show();
      }
      else
      {
        $("#add").hide();
        $("#edit").hide();
        $("#remove").hide();   
      }
      
    });
});
</script>

<h1>Welcome to backend home page</h1>

<label for="cars">Add, edit or remove:</label>
<select name="choice" id="choice">
<option value="add">add</option>
<option value="edit">edit</option>
<option value="remove">remove</option>
</select>
<br><br>

<div style='display:none;' id='add'>Add<br/>&nbsp;
<br/>&nbsp;
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>

<div style='display:none;' id='edit'>Edit<br/>&nbsp;
<br/>&nbsp;
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>

<div style='display:none;' id='remove'>Remove<br/>&nbsp;
<br/>&nbsp;
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>

<?php
?>