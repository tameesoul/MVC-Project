<?php
namespace app\controllers;
class PageController{
    public function home(){

        $home = [
            [
                'name'=>'ahmed khaled tawfik' , 
                'books'=>"safari , 
                The Vampire and the Legend of the Werewolf " 
            ], 

            [
                'name'=>'naguib mahfouz' , 
                'books'=>"awlad haretna"

            ]
            ]; 
        return views('home' , compact("home"));
    }
}