<?php
/*
Plugin Name: Image Hover Effects - WPBakery Addon Free Version
Description: Add attractive hover effects to images.
Plugin URI: http://webdevocean.com
Author: Labib Ahmed
Author URI: http://webdevocean.com
Version: 5.0
License: GPL2
Text Domain: vc-image-hover
*/

/**
 * Prevent direct access to the plugin file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Include the main plugin class file.
 */
include_once( plugin_dir_path( __FILE__ ) . 'plugin.class.php' );

/**
 * Initialize the plugin if the main class exists.
 */
if ( class_exists( 'VC_Image_Hover_Effects_Free' ) ) {
    $vc_image_hover_effects_free = new VC_Image_Hover_Effects_Free();
}
