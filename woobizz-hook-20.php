<?php
/*
Plugin Name: Woobizz Hook 20 
Plugin URI: http://woobizz.com
Description: Remove footer navigation bar
Author: Woobizz
Author URI: http://woobizz.com
Version: 1.0.1
Text Domain: woobizzhook20
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook20_load_textdomain' );
function woobizzhook20_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook20', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Hook 20
function woobizzhook20_remove_handheld_footer_bar() {
  remove_action( 'storefront_footer', 'storefront_handheld_footer_bar', 999 );
}
add_action( 'init', 'woobizzhook20_remove_handheld_footer_bar' );
