<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //API Routes
    'backendhome' => "/backend",
    'apiShowEvents' => "/table",



    //Admin Pages
    //
 
    //
    // Home Page
    //
    'frontendhome' => "/",
    
    ///
    /// Goals
    ///
    'goal1nopoverty' => "/goal1nopoverty",
    'goal2zerohunger' => "/goal2zerohunger",
    'goal3goodhealthandwellbeing' => "/goal3goodhealthandwellbeing",
    'goal4qualityeducation' => "/goal4qualityeducation",
    'goal5genderequality' => "/goal5genderequality",
    'goal6cleanwaterandsanitation' => "/goal6cleanwaterandsanitation",
    'goal7affordableandcleanenergy' => "/goal7affordableandcleanenergy",
    'goal8decentworkandeconomicgrowth' => "/goal8decentworkandeconomicgrowth",
    'goal9industryinnovationandinfrastructure' => "/goal9industryinnovationandinfrastructure",
    'goal10reducedinequality' => "/goal10reducedinequality",
    'goal11sustainablecitiesandcommunities' => "/goal11sustainablecitiesandcommunities",
    'goal12responsibleconsumptionandproduction' => "/goal12responsibleconsumptionandproduction",
    'goal13climateaction' => "/goal13climateaction",
    'goal14lifebelowwater' => "/goal14lifebelowwater",
    'goal15lifeonland' => "/goal15lifeonland",
    'goal16peaceandjusticestronginstitutions' => "/goal16peaceandjusticestronginstitutions",
    'goal17partnershipstoachievegoal' => "/goal17partnershipstoachievegoal"
    
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
