<?php
include("dbconnect.php"); 
?>
<html>
<head>
    <title>Sustainable Dundee</title>
    <meta charset="UTF-8">
    <meta name="robots" value="noindex,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://gitcdn.link/cdn/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/style.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class = "nav">
    <ul>
        <li><a href = "#"><img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/sustainable800.png" height="56.3" alt="Sustainable dundee logo"></a></li>
        <li style= "float: right"><a href="#contact">Contact Us</a></li>
    </ul>    
    </nav>
</head>
<body>
<div class="row mt-5">
    <div class="col d-flex justify-content-center">
        <br>
        <h2>Making Dundee A Better Place</h2>
        <br>
    </div>
</div>
<hr>
<div class="row">
    <div class="col d-flex mt-2 px-5">
        <h3>Goal 14: Life below Water</h3>
        <p>
          Conserve and sustainably use the oceans, seas and marine resources for sustainable development.
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
        <br>
        <ul>Never buy bottled water – boil, filter, chlorine, rainwater, do what you can.</ul>
        <br>
        <ul>
          Reduce waste - lots of the waste we produce on land ends up in the sea.
        </ul>
        <br>
        <ul>
          Stop using single use plastics wherever possible.
        </ul>
        <br>
        <ul>
          Organise clean ups
        </ul>
        <br>
        <ul>
          Buy local and certified fish - support small scale producers. 
        </ul>
        <br>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>
<br>

<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM lifebelowevents";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["EventName"]. " Location:" . $row["EventLocation"] . " Contact:". $row["EventContact"]. " Description:". $row["EventDescription"]. "<br>";
    }
} else {
    echo "0 results";
}

$db->close();

?>
<hr>
</html>
