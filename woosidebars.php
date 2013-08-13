<?php
/**
 * Plugin Name: WooSidebars
 * Plugin URI: http://woothemes.com/woosidebars/
 * Description: Replace widget areas in your theme for specific pages, archives and other sections of WordPress.
 * Author: WooThemes
 * Author URI: http://woothemes.com/
 * Version: 1.3.1
 * Stable tag: 1.3.1
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 if ( ! class_exists( 'Woo_Conditions' ) ) {
 	require_once( 'classes/class-woo-conditions.php' );
 }
 require_once( 'classes/class-woo-sidebars.php' );

 // Third-party integrations.
 if ( class_exists( 'Woocommerce' ) ) require_once( 'integrations/integration-woocommerce.php' );

 global $woosidebars;
 $woosidebars = new Woo_Sidebars( __FILE__ );
 $woosidebars->version = '1.3.1';
 $woosidebars->init();
?>