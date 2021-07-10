<?php 


/**
 * Plugin Name: softx view schedule events
 * Plugin URI: https://softxltd.com 
 * Description: A developer toolkit to view an schedule event.
 * Version: 1.0.0
 * Author: Mehedi Hasan
 * Author URI: https://mehedihasn.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: st-schedule
 * Domain Path: /i18n/languages/
 * Requires at least: 5.7
 * Requires PHP: 7.3
 */

defined('ABSPATH') || exit ;

require_once plugin_dir_path( __FILE__ ) . 'view.php';

$softx_scheduled = new \Softx\Scheduler\View();

$softx_scheduled->boot();