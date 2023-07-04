<?php

function views($file, $data){
    extract($data);
    return require "app/view/$file.view.php";
}