<?php
    session_start();
    ob_start();


    $title = "Главная";
?>


<?php
//url
$request_url = rtrim(ltrim(urldecode(parse_url($_SERVER['REQUEST_URI'],5)), '/'), '/');
$params = array_filter(explode("/", $request_url)); 
//если в url передано 2 параметра
if (count($params) == 2) {
    $dynamic_routes = [
        'offers' =>  'pages/offer.php',
    ];
    if (isset($dynamic_routes[$params[0]])) {
        $get = $params[1];
        require_once $dynamic_routes[$params[0]];
    }
    else require_once ('pages/404.php');
}
//если в url передано меньше двух параметров
elseif (count($params) < 2) {
    $routes = [
        '' => 'pages/main.php',
        'about' => 'pages/about.php',
        'add-user' => 'pages/add-user.php',
        'add-post' => 'pages/add-post.php',
        'auth' => 'pages/auth.php',
        'info' => 'pages/info.php',
        'registr' => 'pages/registr.php',
        'profile' => 'pages/profile.php',
    ];
    if (isset($routes[$request_url])) require_once $routes[$request_url];
    else require_once ('pages/404.php');
}

else require_once ('pages/404.php');



    ob_flush();