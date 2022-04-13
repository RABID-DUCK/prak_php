<?php 

    function autoloader($class){
        include 'classes/' .$class . '.php';
        realpath('static/css');
    }
    spl_autoload_register('autoloader');

     function __construct(){
        imageloadfont('fonts/OpenSans.ttf');
        realpath('static/css/bootstrap.css');
    }