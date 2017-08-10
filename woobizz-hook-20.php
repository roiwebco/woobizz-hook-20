<?php
/*
Plugin Name: Woobizz Hook 20 
Plugin URI: http://woobizz.com
Description: Hide all notices on wp-admin
Author: Woobizz
Author URI: http://woobizz.com
Version: 1.0.0
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
//Hook
function woobizzhook20_hide_all_notices_on_wp_admin(){
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'wp-admin') !== false) {
		echo"<style>.notice{display:none!important;}</style>";
	}
}
add_action('in_admin_header','woobizzhook20_hide_all_notices_on_wp_admin');