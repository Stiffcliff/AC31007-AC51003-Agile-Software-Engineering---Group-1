<?php
?>
<html>
<head>
    <title>Sustainable Dundee</title>
    <meta charset="UTF-8">
    <meta name="robots" value="noindex,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
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
        <h3>Goal 12: Responsible Consumption and Production</h3>
        <p>
          Ensure sustainable consumption and production patterns.
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
        <ul>Shop locally. Supporting local businesses keeps people employed and circulates money back in to the local community.</ul>
        <ul>
          Be conscious of packaging - the less the better
        </ul>
        <ul>
          Buy from companies with sustainable practices and don't harm the environment.
        </ul>
        <ul>
          Buy second hand whenever you can
        </ul>
        <ul>
          Make use of food sharing apps to reduce the amount of food waste you produce
        </ul>
        <ul>
          Choose reusable products - reusable water bottle, eco-bsgs for shopping.
        </ul>
        <ul>
          Join petitions and campaigns calling out businesses with unsustainable practices.
        </ul>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>


<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM resconsevents";
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