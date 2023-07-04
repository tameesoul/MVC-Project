<?php
use core\Database\Connection;

$app['config'] = require "config.php";
Connection::Connect($app['config']['database']);
function views($file, $data){
    extract($data);
    return require "app/view/$file.view.php";
}