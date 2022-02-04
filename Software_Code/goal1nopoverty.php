<?php
include("dbconnect.php");  
?>

<html>
<head>
<meta charset="utf-8">
<title>Goal 1</title>
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
<div class="row">
    <div class="col d-flex justify-content-center">
	<br>
        <h1>Sustainable Dundee</h1>
    </div>
</div>
<div class="row mt-5">
	  <!-- header -->
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
        <h3>Goal 1: No Poverty</h3>
        <p>
          End Poverty in all its forms everywhere.
        </p>
    </div>
</div>
<div class="row mt-3 px-5">
    <div class="col">
        <h4>Things to do</h4>
		<br>
        <ul>Find a charity to support</ul>
		<br>
        <ul>Donate what you don't use to local charities or those in need</ul>
		<br>
    </div>
</div>
<hr>
</body>
<h4>Get involved locally</h4>

	  <!-- retrieve local items from database -->
<?php
$sql = "SELECT EventID,EventName,EventLocation,EventContact,EventDescription FROM nopovertyevents";
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
	<!-- set styling for map -->
<hr>
    <div id="map">
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

<!-- add nav control to map -->
    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav, 'top-left');
	
	<!-- add control so user can see their location on the map -->
	 map.addControl(
        new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
	<!-- track user movements and update on map -->
        trackUserLocation: true,
<!-- show direction device is facing -->
        showUserHeading: true
        })
    );

<!-- allow map to be made full screen -->		
    map.addControl(new mapboxgl.FullscreenControl());

    //set location
    const bairns = [-2.926918, 56.488053];
	
	
	
    // create the popup
    const bairns_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Bairns</h3><p>Dundee Bairns is a charity working to benefit children in Dundee, addressing inequality in basic needs such as food and clothing.</p>'
    );
	 
	

    // create DOM element for the marker
    const el = document.createElement('div');
    el.id = 'marker';

    // create the marker
    new mapboxgl.Marker(el)
        .setLngLat(bairns)
        .setPopup(bairns_popup) // sets a popup on this marker
        .addTo(map);
		
</script>
        
    </div>
    <hr>
    
</html>
