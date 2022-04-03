<?php

/**
 * Inits
 */
add_action( 'after_setup_theme', 'trebuchet_setup' );
add_action( 'wp_enqueue_scripts', 'trebuchet_styles' );

/**
 * Includes
 */
include plugin_dir_path( __FILE__ ) . "inc/register_inc.php";

if ( ! function_exists( 'trebuchet_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function trebuchet_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}
endif; // trebuchet_setup


if ( ! function_exists( 'trebuchet_styles' ) ) :
function trebuchet_styles() {
    wp_register_style(
        'trebuchet-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime( get_template_directory() . '/style.css', )
    );

    wp_enqueue_style('trebuchet-style');
    wp_enqueue_script('trebuchet-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime( get_template_directory() . '/assets/js/main.js'));
}
endif;