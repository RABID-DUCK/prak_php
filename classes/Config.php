<?php

class Config
{
   public static function SettingsDeveloper($file_name, $key=''){
        $property_project = '/configs/'.$file_name.'.php';
        file_exists($property_project) ? include $file_name : 'Файл не существует';


    }
}