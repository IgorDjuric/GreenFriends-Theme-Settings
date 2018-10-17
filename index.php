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


require (__DIR__ . "/classes/Setup.php");
require (__DIR__ . "/classes/ImagesSliderSetup.php");
require (__DIR__ . "/classes/ImagesSlider.php");
require (__DIR__ . "/classes/ImagesSliderWidget.php");
$Setup = new GfThemeSettings\Setup();
$ImageSliderSetup = new GfThemeSettings\ImagesSliderSetup(842,184);