<?php
/**
 * Plugin Name: Setup Pixel Tracking
 * Description: This plugin is used to track a visitor's movement as he/she navigates around the site.
 * Version: 1.0
 * Author: Jake Almeda
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


// include file
//include_once( 'lib/sfm-functions.php' );


$setup_pixel_trackers = new SetupPixelTracker();
class SetupPixelTracker {

	
	public function setup_pixel_tracker() {
		//<img src="'.plugin_dir_url( __FILE__ ).'php-pixel-tracker-master/image.php?email=foo@bar.com" style="display:none;">
		//<img src="'.plugin_dir_url( __FILE__ ).'pixel.php?tom=thomas&b=value2&c=value3">

		//echo plugins_url( 'pixel.php', __FILE__ );
/*		echo plugin_dir_path( __FILE__ ).'pixel.php';
		echo '<br />';
		//echo plugins_url( 'pixel.php', __FILE__ );
		echo plugins_url( 'pixel.php' );
*/
/*		echo '<noscript>
				<img src="'.plugin_dir_url( __FILE__ ).'php-pixel-tracker-master/image.php?email=foo@bar.com" style="display:none;">
			</noscript>';
*/
		echo '<img src="'.plugin_dir_url( __FILE__ ).'tracker.php?image=tracking.gif" alt="">';
		//return '<h1>'.$_GET['email'].'</h1>';
	}

	public function setup_pixel_tracker_pull() {

		//echo file_get_contents( plugin_dir_path( __FILE__ ).'pixel.php' );
		//$layout_file = plugin_dir_path( __FILE__ ).'php-pixel-tracker-master/image.php';
//		echo 'HEARTY: '.file_get_contents( $layout_file );
/*			ob_start();

	        include $layout_file;

            echo ob_get_clean();
*/
	}


	/**
	 * Handle the display
	 */
	public function __construct() {

		// Enqueue scripts
		if ( !is_admin() ) {
			// wp_body_open
			// wp_head
		    add_action( 'wp_body_open', array( $this, 'setup_pixel_tracker' ) );
		    
		    //add_action( 'genesis_before_content_sidebar_wrap', array( $this, 'setup_pixel_tracker_pull' )  );

		}

	}

}