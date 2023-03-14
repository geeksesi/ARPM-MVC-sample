<?php

function handleRoute()
{
    $routes = require_once("./routes/web.php");
    $requested = $_SERVER['REQUEST_URI'];

    if (!isset($routes[$requested]) || !isset($routes[$requested][1])) {
        notFound();
    }

    $instance = new $routes[$requested][0]();
    $functionName =  $routes[$requested][1];
    return $instance->{$functionName}();
}

function notFound()
{
    header('Location: /404');
}
