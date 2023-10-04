<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Kaspar';
        view('index', compact('name'));
        //view('index', ['name'=>$name]);
    }

    public function about(){
        view('about');
    }

    public function form(){
        view('form');
    }

    public function answer(){
        var_dump($_GET);
        var_dump($_POST);
        //var_dump($_REQUEST); NOT USED!!!
    }
    public function getAnswer(){
        echo "get request";
    }
}