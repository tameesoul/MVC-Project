<?php
namespace app\controllers;
class PageController{
    public function home(){
        return require "app/view/home.view.php";
    }
}