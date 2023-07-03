<?php

namespace core; 
class Request{
    public  static function filter_uri(){
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), "/");
    }
    
    public static function lower_method(){
        return strtolower($_SERVER["REQUEST_METHOD"]);
    } 
}