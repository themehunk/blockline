<?php
/**
 * Blockline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockline
 * @since Blockline 1.0
 */


if ( ! function_exists( 'blockline_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blockline 1.0
	 *
	 * @return void
	 */
	function blockline_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'blockline_support' );

if ( ! function_exists( 'blockline_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Blockline 1.0
	 *
	 * @return void
	 */
	function blockline_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blockline-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blockline-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blockline_styles' );


// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';
