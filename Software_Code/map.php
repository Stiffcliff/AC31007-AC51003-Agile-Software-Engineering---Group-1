<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sustainable Dundee</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://gitcdn.link/cdn/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 75px; bottom: 0; width: 100%; height: 100%}
</style>

<!--nav bar-->
<nav class = "nav">
    <ul>
    <li><a href = "frontendhome"><img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/sustainable800.png" height="56.3" alt="Sustainable dundee logo"></a></li>
    <li style= "float: right"><a href="contactus">Contact Us</a></li>
<li style= "float: right"><a href="map">Interactive Map</a></li>
</ul>  
</nav>

</head>
<body>
<style>
    #marker {
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

<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibGVpYWVhIiwiYSI6ImNrejRhbncwaTA3djIydXVzcXZ1NzBvcWIifQ.BsUBVvQX-SQoNoJ5HdDOpw';
    //initialise map
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/leiaea/ckz4avyp0001414p9t4mzt7c1',
        center: [-2.9668332, 56.4746004],
        zoom: 15
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
    const bairns = [-2.926918, 56.488053];
	const fareshare = [-2.984878, 56.461947];
	const community_fridge = [-2.987344, 56.456258];
	const dundee_foodbank = [-2.957435, 56.470922];
	const embark = [-2.969714, 56.457206];
	const ancrum = [-3.00983286, 56.46865463];
	const aspire = [-2.967172, 56.457288];
	const clibrary = [-2.969253, 56.464595];
	const the_mill = [-2.9794578, 56.455201];
	const waterfront = [-2.967209, 56.458743];
	const uod = [-2.97596049, 56.4572525];
	const one_world= [-2.957808, 56.467702];
	const refugee_support = [-3.059908, 56.464932];
	const dew = [-3.055255,56.476193];
	const scrapantics = [-2.9842564, 56.4623319];
	const wildlife_centre = [-3.042937, 56.484635];
	const uod_botanicg = [-3.0251,56.456213];
	const zoology_museum = [-2.978269, 56.457345];
	const msip = [-2.89078641, 56.48251343];
	const mvv = [-2.901802, 56.484905];
	const prince_charging = [-2.962418, 56.465627];
	const queen_charging = [-2.875365, 56.468087];
	const science_centre = [-2.976983, 56.45581];
	const vanda = [-2.967172, 56.457288];
	
	
    // create the popup
    const bairns_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Bairns</h3><p>Dundee Bairns is a charity working to benefit children in Dundee, addressing inequality in basic needs such as food and clothing.</p>'
    );
	const fareshare_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>FareShare Dundee</h3><p>Provides support to homeless and vulnerable individuals and offers training and volunteering opportunities</p>'
    );
	const community_fridge_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Community Fridge</h3><p>The Community Fridge at Gate Church is a communal place where surplus food is shared, by local businesses and individuals</p>'
    );
	const dundee_foodbank_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee And Angus Foodbank</h3><p>The Dundee and Angus Foodbank provide emergency food parcels for those in need and support people in crisis</p>'
    );
	const embark_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Embark Dundee</h3><p>Ride On operates the e-bike sharing services in Dundee. The e-bikes provide a sustainable and affordable mobility solution for moving around the city</p>'
    );
	const ancrum_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Ancrum Outdoor Centre</h3><p>The Ancrum Centre offers taster sessions, days out, skills  development courses and coaching awards for people of all ages and abilities from the Dundee and wider Tayside region</p>'
    );
	const aspire_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Aspire Programme Dundee</h3><p>ASPIRE Dundee is a community engagement programme that uses performing arts across the curriculum to increase pupils’ health and wellbeing, self-confidence, self-esteem, learning and skills development. </p>'
    );
	const clibrary_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Central Library</h3><p></p>'
    );
	const the_mill_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>The Mill / Urban Foresight</h3><p>The MILL is transforming Dundee ito a real-world test and experimentation environment for innovative mobility solutions</p>'
    );
	const waterfront_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Waterfront</h3><p>Regeneration of Dundee City Waterfront. 30 year long project. </p>'
    );
	const uod_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>University Of Dundee</h3><p>One of the UKs leading universities, internationally recognised for its expertise across a range of disciplines </p>'
    );
	const one_world_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>One World Centre Dundee</h3><p>One World Centre promotes global justice and equality through education by supporting teachers, schools and community groups in Angus, Dundee, Fife and Perth & Kinross to engage in Global Citizenship through Professional Learning.</p>'
    );
	const refugee_support_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Refugee Support</h3><p>Run entirely by volunteers, they regularly ship clothing and hygiene aid to refugee camps and distribution warehouses abroad. </p>'
    );
	const dew_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>DEW Products</h3><p>A Scottish company starting an eco-cleaning revolution from Dundee</p>'
    );
	const scrapantics_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Scrap Antics</h3><p>Scrapantics aims to celebrate and promote goings-on in Dundee in any way they can, whether it’s by providing resources, spreading word of mouth in the community or by holding small events.</p>'
    );
	const wildlife_centre_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Camperdown Wildlife Centre</h3><p>The aim of Camperdown Wildlife Centre education programme is to supply the highest standard of zoological education to visitors using every possible resource that is available to education staff.</p>'
    );
	const uod_botanicg_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee University Botanical Gardens</h3><p>Visit and explore the wide range of plants, glasshouses, water garden and herb garden.</p>'
    );
	const zoology_museum_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>The Darcy Thompson Zoology Musuem</h3><p>The University has a zoology museum that houses many fascinating specimens from around the world</p>'
    );
	const msip_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>MSIP</h3><p>Michelin Scotland Innovation Parc - world class innovation parc in Dundee for sustainable mobility and decarbonisation</p>'
    );
	const mvv_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>MVV Environment Baldovie</h3><p>Energy from waste facility in Dundee.</p>'
    );
	const prince_charging_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Princes Street Charging Hub</h3><p>EV charging hub with solar canopies.</p>'
    );
	const queen_charging_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Queen Street Charging Hub</h3><p>EV charging hub with solar canopies.</p>'
    );
	const science_centre_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>Dundee Science Centre</h3><p>Events, activities, learning opportunities</p>'
    );
	const vanda_popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
        '<h3>V&A</h3><p>First design museum in Scotland. Significant economic impact bringing £21 million to the Dundee economy in the first 12 months of opening and the creation of jobs across Scotland</p>'
    );

    // create DOM element for the marker
    const el = document.createElement('div');
    el.id = 'marker';
	const el1 = document.createElement('div');
    el1.id = 'marker';
	const el2 = document.createElement('div');
    el2.id = 'marker';
	const el3 = document.createElement('div');
    el3.id = 'marker';
	const el4 = document.createElement('div');
    el4.id = 'marker';
	const el5 = document.createElement('div');
    el5.id = 'marker';
	const el6 = document.createElement('div');
    el6.id = 'marker';
	const el7 = document.createElement('div');
    el7.id = 'marker';
	const el8 = document.createElement('div');
    el8.id = 'marker';
	const el9 = document.createElement('div');
    el9.id = 'marker';
	const el10 = document.createElement('div');
    el10.id = 'marker';
	const el11 = document.createElement('div');
    el11.id = 'marker';
	const el12 = document.createElement('div');
    el12.id = 'marker';
	const el13 = document.createElement('div');
    el13.id = 'marker';
	const el14 = document.createElement('div');
    el14.id = 'marker';
	const el15 = document.createElement('div');
    el15.id = 'marker';
	const el16 = document.createElement('div');
    el16.id = 'marker';
	const el17 = document.createElement('div');
    el17.id = 'marker';
	const el18 = document.createElement('div');
    el18.id = 'marker';
	const el19 = document.createElement('div');
    el19.id = 'marker';
	const el20 = document.createElement('div');
    el20.id = 'marker';
	const el21 = document.createElement('div');
    el21.id = 'marker';
	const el22 = document.createElement('div');
    el22.id = 'marker';
	const el23 = document.createElement('div');
    el23.id = 'marker';

    // create the marker
    new mapboxgl.Marker(el)
        .setLngLat(bairns)
        .setPopup(bairns_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el1)
        .setLngLat(fareshare)
        .setPopup(fareshare_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el2)
        .setLngLat(community_fridge)
        .setPopup(community_fridge_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el3)
        .setLngLat(dundee_foodbank)
        .setPopup(dundee_foodbank_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el4)
        .setLngLat(embark)
        .setPopup(embark_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el5)
        .setLngLat(ancrum)
        .setPopup(ancrum_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el6)
        .setLngLat(aspire)
        .setPopup(aspire_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el7)
        .setLngLat(clibrary)
        .setPopup(clibrary_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el8)
        .setLngLat(the_mill)
        .setPopup(the_mill_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el9)
        .setLngLat(waterfront)
        .setPopup(waterfront_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el10)
        .setLngLat(uod)
        .setPopup(uod_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el11)
        .setLngLat(one_world)
        .setPopup(one_world_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el12)
        .setLngLat(refugee_support)
        .setPopup(refugee_support_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el13)
        .setLngLat(dew)
        .setPopup(dew_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el14)
        .setLngLat(scrapantics)
        .setPopup(scrapantics_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el15)
        .setLngLat(wildlife_centre)
        .setPopup(wildlife_centre_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el16)
        .setLngLat(uod_botanicg)
        .setPopup(uod_botanicg_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el17)
        .setLngLat(zoology_museum)
        .setPopup(zoology_museum_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el18)
        .setLngLat(msip)
        .setPopup(msip_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el19)
        .setLngLat(mvv)
        .setPopup(mvv_popup) // sets a popup on this marker
        .addTo(map);
	new mapboxgl.Marker(el20)
        .setLngLat(prince_charging)
        .setPopup(prince_charging_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el21)
        .setLngLat(queen_charging)
        .setPopup(queen_charging_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el22)
        .setLngLat(science_centre)
        .setPopup(science_centre_popup) // sets a popup on this marker
        .addTo(map);	
	new mapboxgl.Marker(el23)
        .setLngLat(vanda)
        .setPopup(vanda_popup) // sets a popup on this marker
        .addTo(map);	
		
</script>

</body>
</html>
