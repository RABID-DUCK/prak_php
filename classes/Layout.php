<?php 
    require_once('../configs/layout.php');
    class Layout extends Config{
//        static private $singleton;
        function __construct(){
            $this->settings;
        }
       
    }
    class Config extends layout{
        
        function SettingsDeveloper(){
            $this->settings['font'];
        }
    }