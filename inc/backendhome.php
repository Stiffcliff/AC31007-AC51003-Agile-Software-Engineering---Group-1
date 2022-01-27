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

<?php
?>