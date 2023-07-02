<?php

class Request{
    public function filter_uri(){
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), "/");
    }
    
    public function lower_method(){
        return strtolower($_SERVER["REQUEST_METHOD"]);
    } 
}