<?php
class Settings{
    public array $settings = array(
       'font' => "OpenSans",
    );
    // function __construct($font)
    // // {
    // //     $this->font = $font;
    // // }
}

$prop = new Settings;
//str_replace("%body%", "$prop->settings['font']", "body style='$prop->settings['font']'");
$prop->settings;
