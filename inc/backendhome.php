<?php
include("dbconnect.php");  
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(document).ready(function(){
    $('#choice').on('change', function() {
      if ( this.value == '0')
      
      {
        $("#add").show();
        $("#edit").hide();
        $("#remove").hide();
      }
      if ( this.value == '1')
      {
        $("#add").hide();
        $("#edit").show();
        $("#remove").hide();
      }
      if ( this.value == '2')
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

<label for="choice">Add, edit or remove:</label>

<select name="choice" id="choice">
<option value="0">add</option>
<option value="1">edit</option>
<option value="2">remove</option>
</select>

<br><br>

<body>
<div style='display:none;' id='add'>Add<br/>&nbsp;

<br/>&nbsp;
    <h1>add</h1>
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>

<div style='display:none;' id='edit'>Edit<br/>&nbsp;
<br/>&nbsp;
    <h1>edit</h1>
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>

<div style='display:none;' id='remove'>Remove<br/>&nbsp;
<br/>&nbsp;
    <h1>remove</h1>
    <input type='text' class='text' name='add' value size='20' />
    <br/>
</div>
</body>

<?php
?>