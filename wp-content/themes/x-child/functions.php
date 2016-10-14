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

// Additional Functions
// =============================================================================

