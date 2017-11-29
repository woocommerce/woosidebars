<?php
/**
 * Plugin Name: WooSidebars
 * Plugin URI: https://github.com/woocommerce/woosidebars/
 * Description: Replace widget areas in your theme for specific pages, archives and other sections of WordPress.
 * Author: WooCommerce
 * Author URI: http://woocommerce.com/
 * Version: 1.5.0
 * Stable tag: 1.5.0
 * Requires at least: 4.1
 * Tested up to: 4.6.1
 * License: GPL v3 or later - http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: woosidebars
 * Domain Path: /lang
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
 $woosidebars->version = '1.5.0';
 $woosidebars->init();
