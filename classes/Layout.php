<?php 
    require_once '../classes/layout.php';
    class Layout{
//        static private $singleton;
        protected function __construct(){
            Config::SettingsDeveloper();

        }
        public function font_style(){
            $font = Config::SettingsDeveloper('layout', 'font');
            echo "<link rel='preconnect' href='https://fonts.googleapis.com'>\r\n
          <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>\r\n
          <link href='https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap' rel='stylesheet'>
          <style>
          html{
          font-family: $font, sans-serif;
          }
          </style>
          ";
        }
       
    }