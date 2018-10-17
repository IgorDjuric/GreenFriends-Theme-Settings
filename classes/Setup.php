<?php
namespace GfThemeSettings;
class Setup
{
    public function __construct(){
        require (__DIR__ . "/ImagesSliderSetup.php");
        require (__DIR__ . "/ImagesSlider.php");
        require (__DIR__ . "/ImagesSliderWidget.php");
        $ImageSliderSetup = new ImagesSliderSetup(842,184);
    }
}