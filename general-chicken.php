<?php
/**
 * Plugin Name: General Chicken
 * Plugin URI: 
 * Description: 
 * Donate Link: 
 * Author: 
 * Version: 3
 * Author URI: 
 * Text Domain: general-chicken
 */


//die("GC ");

require_once (plugin_dir_path(__FILE__). 'src/GeneralChicken/autoloader.php');

require_once (plugin_dir_path(__FILE__). 'src/GeneralChicken/GeneralChicken_CPT.php');

add_action ('rest_api_init', [new GeneralChicken\API, 'doRegisterRoutes']);