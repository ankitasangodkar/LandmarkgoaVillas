<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package pado
 * @since 1.0
 */


if (! function_exists('pado_child_styles')) {
	function pado_child_styles(){

		// register style
		wp_enqueue_style('pado-child-css', get_stylesheet_directory_uri() . '/style.css');


	}
}
add_action( 'wp_enqueue_scripts', 'pado_child_styles');