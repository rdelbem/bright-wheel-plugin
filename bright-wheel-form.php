<?php 

defined('ABSPATH') || die();

/**
 * Bright Wheel Form
 *
 * @package           Bright Wheel Form
 * @author            Rodrigo Del Bem
 * @copyright         2022 Bright Whell + Rodrigo Del Bem
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Bright Wheel
 * Plugin URI:        https://mybrightwheel.com/
 * Description:       Just a simple form integrated with Hubspot api. It shall be used as a shortcode wherever you want. Just add the shortcode [brightwheelform]
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Rodrigo Del Bem
 * Author URI:        https://codepen.com/rdelbem
 * Text Domain:       bright-wheel-form
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 * 
 */

require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

use BrightWheel\BrightWheel;

if(!class_exists('BrightWheel')){
    add_action('plugins_loaded', function(){
        new BrightWheel();
    });
}







