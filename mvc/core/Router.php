<?php
namespace core;
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

        public  function direct($uri,$requestMethodType)
        {
            if (array_key_exists($uri,$this->routes[$requestMethodType]))
            {
                return $this->callAction(...explode('@', $this->routes[$requestMethodType][$uri]));
            }
            throw new \Exception('Invalid URI');
        }
    
        public function callAction($controller,$action)
        {
            $controller = "app\\controllers\\{$controller}";
            $controller= new $controller;
            if ( ! method_exists($controller,$action)){
                throw new \Exception('action not exists');
            }
            return $controller->$action();
        }
    }
        