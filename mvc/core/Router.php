<?php
namespace core;
//use app\controllers\PageController;
class Router{
    public $routes = [
        'get'=>[

        ],
        'post'=>[

        ]
        ];


        public static function load($file){
            $router = new static; 
            require "app/routes.php";
            return $router; 
        }

        public  function get($uri,$controller){
            return $this->routes['get'][$uri]=$controller;
        }
        public function post($uri,$controller){
            return $this->routes['post'][$uri]=$controller;
        }

        public function direct($uri,$request_type){
            if(array_key_exists($uri,$this->routes[$request_type])){
                return $this->callaction(...explode("@", $this->routes[$request_type][$uri]));
            }
            throw new \Exception("Not Fount URI");
            
        }
        public function callaction($controller,$action){
            $controlle="app\\controllers\\{$controller}"; 
            $controller = new $controller; 
            if(!method_exists($controller , $action)){
                throw new \Exception("action does not exsist");
            } 
            return $controller->$action();

        }
        
}