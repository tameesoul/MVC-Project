<?php
use core\Request;
use core\Router;
require "vendor/autoload.php";
require "core/bootstrap.php";
Router::load("app/routes.php")->direct(Request::filter_uri(),Request::lower_method());