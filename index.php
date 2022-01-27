<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //API Routes
    'backendhome' => "/backend",



    //Admin Pages
    //
 
    //
    // Home Page
    //
    'frontendhome' => "/",
    
    ///
    /// Goals
    ///
    'goal1' => "goal1",
    'goal2' => "goal2",
    'goal3' => "goal3",
    'goal4' => "goal4",
    'goal5' => "goal5",
    'goal6' => "goal6",
    'goal7' => "goal7",
    'goal8' => "goal8",
    'goal9' => "goal9",
    'goal10' => "goal10",
    'goal11' => "goal11",
    'goal12' => "goal12",
    'goal13' => "goal13",
    'goal14' => "goal14",
    'goal15' => "goal15",
    'goal16' => "goal16",
    'goal17' => "goal17"
    
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
