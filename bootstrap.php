<?php
spl_autoload_register(__NAMESPACE__ .'\ConnClasses::autoloader');
class ConnClasses{
    function autoloader($class){
        $path = '/classes/';
        include $path.$class.'.php';
        realpath('static/css');
    }

    function __construct()
    {
        imageloadfont('fonts/OpenSans.ttf');
        realpath('static/css/bootstrap.css');
    }
}
