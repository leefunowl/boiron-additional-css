<?php
/**
 * Plugin Name:     Boiron additional CSS
 * Plugin URI:      https://leefun.us/
 * Description:     CSS
 * Author:          Leefun
 * Author URI:      https://leefun.us/
 * Text Domain:     boiron-additional-css
 * Domain Path:     /languages
 * Version:         0.0.2
 *
 * @package         boiron-additional-css
 */

// Custom CSS
function boiron_enqueue_styles() {
	wp_register_style( 'boiron-stylesheet', plugins_url( 'css/boiron-stylesheet.css', __FILE__ ) );
	wp_enqueue_style( 'boiron-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'boiron_enqueue_styles' );

add_action( 'wp_footer','boiron_css' );
function boiron_css() {
?>

<style>



</style>

<?php
}