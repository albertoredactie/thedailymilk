<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );

define( 'X_CHILD_PATH', get_stylesheet_directory() );
define( 'X_CHILD_URL', get_stylesheet_directory_uri() );

$nav_func_child = get_stylesheet_directory() . '/framework/functions/global';

// Additional Functions
// =============================================================================

include_once( $nav_func_child . '/navbar.php' );
include_once( $nav_func_child . '/featured.php' );
include_once( $nav_func_child . '/content.php' );

// Additional Functions
// =============================================================================

//custom Thumbnail

// add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'custom-image-size', 400, 275, array( 'center', 'center' ) );
}
