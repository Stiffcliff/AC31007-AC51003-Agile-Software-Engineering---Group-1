<?php
include("dbconnect.php"); 
?>
<html>
<head>
<meta charset="utf-8">
<title>Attach a popup to a marker instance</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://gitcdn.link/cdn/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <nav class = "nav">
    <ul>
        <li><a href = "#"><img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/sustainable800.png" height="56.3" alt="Sustainable dundee logo"></a></li>
        <li style= "float: right"><a href="#contact us">Contact Us</a></li>
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
        <h3>Goal 3: Good Health and Wellbeing</h3>
        <p>
          Ensure healthy lives and promote well-being for all at all ages.
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
        <br>
        <ul>Get vaccinated</ul>
        <br>
        <ul>Donate Blood</ul>
        <br>
        <ul>Walk! It’s good for the mind, body and environment.</ul>
        <br>
        <ul>Take regular exercise, find a sport or activity you enjoy. </ul>
        <br>
        <ul>Take care of your mental health. Meditate, talk to friends and family, and seek professional help.</ul>
        <br>
        <ul>Research and development (work in Dundee)</ul>
        <br>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>
<br>


<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM goodhealthevents";
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
<div id="map">
<style>
body { margin: 20; padding: 0; }
#map { position: relative; top: 0; bottom: 0; width: 500px; height: 375px}
 #marker {
        background-image: url(marker.png);
        background-size: cover;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
    }

    .mapboxgl-popup {
        max-width: 200px;
    }    
	</style>
	<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibGVpYWVhIiwiYSI6ImNrejRhbncwaTA3djIydXVzcXZ1NzBvcWIifQ.BsUBVvQX-SQoNoJ5HdDOpw';
    //initialise map
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/leiaea/ckz4avyp0001414p9t4mzt7c1',
        center: [-2.9668332, 56.4746004],
        zoom: 9
    });

    //adds navigation tools to map - zoom etc
    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav, 'top-left');

    map.addControl(
        new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        // When active the map will receive updates to the device's location as it changes.
        trackUserLocation: true,
        // Draw an arrow next to the location dot to indicate which direction the device is heading.
        showUserHeading: true
        })
    );

    map.addControl(new mapboxgl.FullscreenControl());

    //set location
    
	const embark = [-2.969714, 56.457206];
	const ancrum = [-3.00983286, 56.46865463];
	
    // create the popup
    
	const embark_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Embark Dundee</h3><p>Ride On operates the e-bike sharing services in Dundee. The e-bikes provide a sustainable and affordable mobility solution for moving around the city</p>'
    );
	const ancrum_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Ancrum Outdoor Centre</h3><p>The Ancrum Centre offers taster sessions, days out, skills  development courses and coaching awards for people of all ages and abilities from the Dundee and wider Tayside region</p>'
    );
	

    // create DOM element for the marker
    
	const el4 = document.createElement('div');
    el4.id = 'marker';
	const el5 = document.createElement('div');
    el5.id = 'marker';
	

    // create the marker
    
	new mapboxgl.Marker(el4)
        .setLngLat(embark)
        .setPopup(embark_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el5)
        .setLngLat(ancrum)
        .setPopup(ancrum_popup) // sets a popup on this marker
        .addTo(map);
	
		
</script>
</div>
<hr>
</html>
