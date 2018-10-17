<?php

namespace GfThemeSettings;
class ImagesSliderSetup
{
    /**
     * ImageSliderSetup constructor.
     */
    private $width;
    private $height;
    private $imageSlider;

    /**
     * ImageSliderSetup constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->imageSlider = new ImagesSlider($width, $height);
        $this->init();
    }


    private function init()
    {
        load_plugin_textdomain('gf-image-slider', '', plugins_url() . '/gf-image-slider/languages');
        add_action(
            'admin_enqueue_scripts',
            array($this, 'enqueueAdminStyleAndScripits')
        );
        add_action('admin_menu', array($this, 'optionPageRegister'));
        add_action('widgets_init', array($this, 'registerWidget'));
        add_action('test',array($this, 'test'));
    }
    public function test() {
        return $imageSize = array($this->width,$this->height);
    }

    public function optionPageRegister()
    {

        add_submenu_page('gf_theme_settings','Image Sliders', 'Image slider', 'administrator', 'image_slider_options', array($this, 'optionPage'));

        add_action('admin_init', array($this, 'registerOptions'));
    }

    public function registerOptions()
    {
        register_setting('gf-image-slider-settings-group', 'gf-image-values');

    }

    public function optionPage()
    {
        require(__DIR__ . "/../html/optionPage.phtml");
    }

    public function registerWidget()
    {
        register_widget('ImagesSliderWidget');
    }

}