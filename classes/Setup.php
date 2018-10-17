<?php

namespace GfThemeSettings;
class Setup
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        load_plugin_textdomain('gf-theme-settings', '', plugins_url() . '/gf-theme-settings/languages');

        //admin scripts & styles
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_style_and_scripits'));

        //frontend scripts & styles
        add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_style_and_scripits'));


        add_action('admin_menu', array($this, 'gf_theme_settings_create_menu'));
    }

    public function gf_theme_settings_create_menu()
    {
        //create new top-level menu
        add_menu_page('GreenFriends Theme Settings', 'GreenFriends Theme Settings', 'administrator', 'gf_theme_settings', array($this, 'gf_theme_settings_options_page'), null, 200);
        add_submenu_page('gf_theme_settings', 'GreenFriends Theme Settings', 'General', 'administrator', 'gf_theme_settings', array($this, 'gf_theme_settings_options_page'));
    }

    public function gf_theme_settings_options_page()
    {
        require(__DIR__ . "/../html/optionPageGeneral.phtml");

    }


    //admin scripts & styles
    public function enqueue_admin_style_and_scripits()
    {
        //Zove media uploader
        wp_enqueue_media();

        wp_enqueue_style('gf-image-slider-admin-css', plugins_url() . '/gf-image-slider/css/admin.css');
        wp_enqueue_script('gf-image-slider-admin-js', plugins_url() . '/gf-image-slider/js/admin.js', array('jquery'), '', true);
    }

    //frontend scripts & styles
    public function enqueue_frontend_style_and_scripits()
    {
        wp_enqueue_style('gf-image-slider-front-end-css', plugins_url() . '/gf-image-slider/css/front.css');
    }
}