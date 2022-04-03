<?php
foreach ( glob( plugin_dir_path( __FILE__ ) . "styles/*.php" ) as $file ) {
    include_once $file;
}
foreach ( glob( plugin_dir_path( __FILE__ ) . "patterns/*.php" ) as $file ) {
    include_once $file;
}