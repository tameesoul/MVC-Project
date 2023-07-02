<?php
use core\Router;
require "vendor/autoload.php";
$router = new Router;
require "app/routes.php";

var_dump($router->routes);