<?php
/**
 * GreenFriends Theme Settings
 *
 * @package     PluginPackage
 * @author      Green Friends
 * @copyright   2018 Green Friends
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: GreenFriends Theme Settings
 * Plugin URI:  https://example.com/plugin-name
 * Description: GreenFriends Theme Settings
 * Version:     1.0.0
 * Author:      Green Friends
 * Author URI:  https://example.com
 * Text Domain: greenfriends-theme-settings
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


add_action('admin_menu', 'gf_theme_settings_create_menu');
function gf_theme_settings_create_menu()
{
    //create new top-level menu
    add_menu_page('GreenFriends Theme Settings', 'GreenFriends Theme Settings', 'administrator', 'gf_theme_settings', 'gf_theme_settings_options_page', null, 200);
    add_submenu_page('gf_theme_settings', 'GreenFriends Theme Settings', 'General', 'administrator', 'gf_theme_settings', 'gf_theme_settings_options_page');
}
function gf_theme_settings_options_page(){
    echo '<h1>GreenFriends Shop Theme Settings</h1>';

//    $ImageSliderSetup = new GfThemeSettings\ImagesSliderSetup(842,184);

//    $test = new GfThemeSettings\Setup();
}
require (__DIR__ . "/classes/ImagesSliderSetup.php");
require (__DIR__ . "/classes/ImagesSlider.php");
require (__DIR__ . "/classes/ImagesSliderWidget.php");
$ImageSliderSetup = new GfThemeSettings\ImagesSliderSetup(842,184);