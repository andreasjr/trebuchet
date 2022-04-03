<?php

/**
 * Inits
 */
add_action( 'after_setup_theme', 'trebuchet_setup' );
add_action( 'wp_enqueue_scripts', 'trebuchet_styles' );
add_action('wp_head', 'trebuchet_post_header');

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
	add_editor_style( array(
        'style.css',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700&display=swap'
    ));
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

    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/05d8567027.js');
    wp_enqueue_script('trebuchet', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime( get_template_directory() . '/assets/js/main.js'));
}
endif;

function trebuchet_post_header(){
    echo
'<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">';
}

require plugin_dir_path( __FILE__ ) . 'inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/andreasjr/trebuchet',
	__FILE__,
	'trebuchet'
);
//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');