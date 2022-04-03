<?php
add_action( 'init', 'trebuchet_register_patterns' );
foreach ( glob( plugin_dir_path( __FILE__ ) . "styles/*.php" ) as $file ) {
    include_once $file;
}
function trebuchet_register_patterns() {
    register_block_pattern_category('trebuchet/general',
    array(
        'label' => __( 'Trebuchet', 'trebuchet' )
    ));
    foreach ( glob( plugin_dir_path( __FILE__ ) . "patterns/*.php" ) as $file ) {
        include_once $file;
    }
}
   