<?php

// =============================================================================
// FUNCTIONS/GLOBAL/FEATURED.PHP
// -----------------------------------------------------------------------------
// Handles output of featured content for different post formats (e.g. images,
// audio, video, et cetera).
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Featured Image
//   02. Featured Gallery
//   03. Featured Audio
//   04. Featured Video
//   05. Featured Portfolio
// =============================================================================

// Featured Image
// =============================================================================

//
// Output featured image in an <a> tag on index pages and a <div> for single
// posts and pages.
//

if ( ! function_exists( 'x_child_featured_image' ) ) :
	function x_child_featured_image( $cropped = '' ) {
		$stack     = x_get_stack();
		$fullwidth = ( in_array( 'x-full-width-active', get_body_class() ) ) ? true : false;

		if ( has_post_thumbnail() ) {
			if ( $cropped == 'cropped' ) {
				if ( $fullwidth ) {
					$thumb = get_the_post_thumbnail( NULL, 'entry-cropped-fullwidth', NULL );
				} else {
					$thumb = get_the_post_thumbnail( NULL, 'entry-cropped', NULL );
				}
			} else {
				if ( $fullwidth ) {
					$thumb = get_the_post_thumbnail( NULL, 'entry-fullwidth', NULL );
				} else {
					$thumb = get_the_post_thumbnail( NULL, 'custom-image-size', NULL );
				}
			}

			switch ( is_singular() ) {
				case true:
				printf( '<div class="entry-thumb">%s</div>', $thumb );
				break;
				case false:
				printf( '<a href="%1$s" class="entry-thumb" title="%2$s">%3$s</a>',
					esc_url( get_permalink() ),
					esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ),
					$thumb
					);
				break;
			}
		}
	}
endif;
