<?php

// =============================================================================
// FUNCTIONS/GLOBAL/CONTENT.PHP
// -----------------------------------------------------------------------------
// Functions pertaining to content output.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Alternate Title
//   02. Link Pages
//   03. Excerpt Length
//   04. Excerpt More String
//   05. Content More String
//   06. Entry Navigation
//   07. Does Not Need Entry Meta
// =============================================================================

// Alternate Title
// =============================================================================

// Excerpt More String
// =============================================================================

if ( ! function_exists( 'x_excerpt_string' ) ) :
  function x_excerpt_string( $more ) {
    
    $stack = x_get_stack();

    if ( $stack == 'integrity' ) {
      return ' ... <div><a href="' . get_permalink() . '" class="more-link">' . __( 'LEES MEER', '__x__' ) . '</a></div>';
    } else if ( $stack == 'renew' ) {
      return ' ... <a href="' . get_permalink() . '" class="more-link">' . __( 'LEES MEER', '__x__' ) . '</a>';
    } else if ( $stack == 'icon' ) {
      return ' ...';
    } else if ( $stack == 'ethos' ) {
      return ' ...';
    }

  }
  add_filter( 'excerpt_more', 'x_excerpt_string' );
endif;
