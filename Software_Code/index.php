<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //API Routes
    //put
    'apiLogin' => "/api/login/(?'loginID'[\w\-]+)",
    'apiCollectPart' => "/api/collectPart/(?'loginID'[\w\-]+)/(?'partID'[\w\-]+)",
    //get
    'apiUserLogins' => "/api/userLogins/(?'userID'[\w\-]+)",
    'apiUserPartsCollected' => "/api/userPartsCollected/(?'userID'[\w\-]+)",
    'apiCollectedParts' => "/api/collectedParts/(?'partID'[\w\-]+)",
    'apiShowEvents' => "/api/allEvents",



    //Admin Pages
    //
    'login' => "/login",
    'create_article' => "/createarticle",
    'logout' => "/logout",
    //
    // Home Page
    //
    'home' => "/"
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