<?php
include("dbconnect.php"); 
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://gitcdn.link/cdn/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!--links for nav bar -->
    <nav class = "nav">
        <ul>
        <li><a href = "frontendhome"><img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/sustainable800.png" height="56.3" alt="Sustainable dundee logo"></a></li>
        <li style= "float: right"><a href="contactus">Contact Us</a></li>
	<li style= "float: right"><a href="map">Interactive Map</a></li>
    </ul>  
    </nav>


</head>
<body>
    <!-- header -->	
<div class="row mt-5">
    <div class="col d-flex justify-content-center">
        <br>
        <h2>Making Dundee A Better Place</h2>
        <br>
    </div>
</div>
<hr>
    <!-- more about specific goal -->
<div class="row">
    <div class="col d-flex mt-2 px-5">
        <h3>Goal 2: Zero Hunger</h3>
        <p>
          End hunger, achieve food security and improved nutrition and promote sustainable agriculture.
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
        <br>
        <ul>Buy local and in-season food.</ul>
        <br>
        <ul>Try growing some of your own food</ul>
        <br>
        <ul>Don't waste food</ul>
        <br>
        <ul>Buy "funny fruit" many fruits and vegetables are thrown out because their size, shape, or color are not “right”. Buying these perfectly good funny fruit, utilizes food that might otherwise go to waste.</ul>
        <br>
        <ul>Consume less meat, eat more plant based.</ul>
        <br>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>
<br>

    <!-- retrieve local items from database -->
<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM zerohungerevents";
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
 	<!-- set styling for map -->	 
        <style>
body { margin: 20; padding: 0; }
#map { position:relative; top: 0; bottom: 0; width: 500px; height: 375px}
            
            #marker {
     <!-- personalised marker using SD colour -->		    
        background-image: url(https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/marker.png);
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
     <!-- personalised map using colours from SD -->	    
        style: 'mapbox://styles/leiaea/ckz4avyp0001414p9t4mzt7c1',
        center: [-2.9668332, 56.4746004],
        zoom: 9
    });

    //adds navigation tools to map - zoom etc
    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav, 'top-left');
    
	//add control so user can see their location on map	
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
    //set location
   
	const fareshare = [-2.984878, 56.461947];
	
	const dundee_foodbank = [-2.957435, 56.470922];
	
    // create the popup
	 const fareshare_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>FareShare Dundee</h3><p>Provides support to homeless and vulnerable individuals and offers training and volunteering opportunities</p>'
    );
	const dundee_foodbank_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee And Angus Foodbank</h3><p>The Dundee and Angus Foodbank provide emergency food parcels for those in need and support people in crisis</p>'
    );
   

    
	const el1 = document.createElement('div');
    el1.id = 'marker';
	
	const el3 = document.createElement('div');
    el3.id = 'marker';
	

    // create the marker
    
	new mapboxgl.Marker(el1)
        .setLngLat(fareshare)
        .setPopup(fareshare_popup) // sets a popup on this marker
        .addTo(map);
	
	new mapboxgl.Marker(el3)
        .setLngLat(dundee_foodbank)
        .setPopup(dundee_foodbank_popup) // sets a popup on this marker
        .addTo(map);	
		
</script>
</div>
<hr>
</html>
