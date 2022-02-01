<?php
?>
<html>
<head>
    <title>Sustainable Dundee</title>
    <meta charset="UTF-8">
    <meta name="robots" value="noindex,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://gitcdn.link/cdn/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/inc/style.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class = "nav">
    <ul>
        <li><a href = "#"><img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/inc/resources/sustainable800.png" height="56.3" alt="Sustainable dundee logo"></a></li>
        <!--
        <li><a href="#contact"></a></li>
        <li><a href="#about">About</a></li>
-->
    </ul>    
    </nav>
</head>
<body>
<div class="row mt-5">
    <div class="col d-flex justify-content-center">
        <h2>Making Dundee A Better Place</h2>
    </div>
</div>
<hr>
<div class="row">
    <div class="col d-flex mt-2 px-5">
        <h3>Goal 8: Decent Work and Economic Growth (Green economy, sustainable tourism)</h3>
        <p>
          Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
        <ul>Invite people with experience in a certain field to create a mentoring group that will help young people better prepare for their future jobs.</ul>
        <ul>
          Be a conscious consumer - if something is cheap is it likely to be hurting people or the planet in some way.
        </ul>
        <ul>
          Buy from local producers
        </ul>
        <ul>
          Support local economic growth by choosing to buy from local businesses
        </ul>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>


<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM ecogrowevents";
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
