<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/Software_Code/');

$rules = array(
    //
    //API Routes
    'backendhome' => "/backend",
    'apiShowEvents' => "/table",
    'contactus' => "/contactus",
    'map' => "/interactivemap",


    //Admin Pages
    //
 
    //
    // Home Page
    //
    'frontendhome' => "/",
    
    ///
    /// Goals
    ///
    
    'goal1nopoverty' => "/goal1",
    'goal2zerohunger' => "/goal2",
    'goal3goodhealthandwellbeing' => "/goal3",
    'goal4qualityeducation' => "/goal4",
    'goal5genderequality' => "/goal5",
    'goal6cleanwaterandsanitation' => "/goal6",
    'goal7affordableandcleanenergy' => "/goal7",
    'goal8decentworkandeconomicgrowth' => "/goal8",
    'goal9industryinnovationandinfrastructure' => "/goal9",
    'goal10reducedinequality' => "/goal10",
    'goal11sustainablecitiesandcommunities' => "/goal11",
    'goal12responsibleconsumptionandproduction' => "/goal12",
    'goal13climateaction' => "/goal13",
    'goal14lifebelowwater' => "/goal14",
    'goal15lifeonland' => "/goal15",
    'goal16peaceandjusticestronginstitutions' => "/goal16",
    'goal17partnershipstoachievegoal' => "/goal17"
    
    //
    // Style
    //
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>
