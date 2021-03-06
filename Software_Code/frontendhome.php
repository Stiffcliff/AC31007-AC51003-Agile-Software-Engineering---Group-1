<?php
define('INCLUDE_DIR', dirname(__FILE__) . '/resources/');  
?>
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

<hr>
<!-- header -->
<div class="row mt-5">
    <div class="col d-flex justify-content-center">
        <h2>Making Dundee A Better Place</h2>
    </div>
</div>
<div class="row">
    <div class="col d-flex mt-2 px-5">
	    <!--link to map and introduce dev projects -->
        <p>
         Check out our map of sustainable options in Dundee <a href = 'map'>here</a>!
         <br>Development projects we are working on:	 
        </p>
    </div>
</div>
<div class="main">
	<!--image links to more info about each goal -->
<a href = "/goal1">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/no_poverty.png"height="200" width="200" alt = "No Poverty">
	</a>
<a href = "/goal2">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/no_hunger.png"height="200" width="200" alt = "No Hunger">
	</a>	
<a href = "/goal3">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/good_health.png"height="200" width="200" alt = "Good Health">
	</a>
<a href = "/goal4">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/quality_education.png"height="200" width="200" alt = "Quality Education">
	</a>	
<a href = "/goal5">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/gender_equality.png"height="200" width="200" alt = "Gender Equality">
	</a>
<a href = "/goal6">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/clean_water.png"height="200" width="200" alt = "Clean Water">
	</a>
<a href = "/goal7">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/clean_energy.png"height="200" width="200" alt = "Clean Energy">
	</a>
<a href = "/goal8">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/good_jobs.png"height="200" width="200" alt = "Good Jobs">
	</a>
<a href = "/goal9">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/innovation.png"height="200" width="200" alt = "Innovation">
	</a>	
<a href = "/goal10">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/reduced_inequality.png"height="200" width="200" alt = "Reduced Inequalities">
	</a>
<a href = "/goal11">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/sustainable_cities.png"height="200" width="200" alt = "Sustainable Cities">
	</a>	
<a href = "/goal12">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/responsible_consumption.png"height="200" width="200" alt = "Responsible Consumption">
	</a>
<a href = "/goal13">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/protect_the_planet.png"height="200" width="200" alt = "Protect The Planet">
	</a>
<a href = "/goal14">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/life_below_water.png"height="200" width="200" alt = "Life Below Water">
	</a>
<a href = "/goal15">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/life_on_land.png"height="200" width="200" alt = "Life On Land">
	</a>
<a href = "/goal16">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/peace_and_justice.png"height="200" width="200" alt = "Peace and Justice">
		</a>
<a href = "/goal17">
        <img src="https://raw.githubusercontent.com/Stiffcliff/AC31007-AC51003-Agile-Software-Engineering---Group-1/main/Software_Code/resources/partnerships.png"height="200" width="200" alt = "Partnerships for the Goals">
	</a>	
</div>
<hr>
	
</body>
</html>
<?php
?>
