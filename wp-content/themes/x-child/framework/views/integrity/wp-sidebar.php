<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-SIDEBAR.PHP
// -----------------------------------------------------------------------------
// Sidebar output for Integrity.
// =============================================================================

?>

<?php if ( x_get_content_layout() != 'full-width' ) : ?>

  <aside class="<?php x_sidebar_class(); ?>" role="complementary">

<!--   	<div class="relative-test hentry" style="margin-bottom: 100px;">
  		Image 1 section
  	</div>

  	<div class="relative-test hentry" style="margin-bottom: 100px;">
  		Image 2 section
  	</div>

  	<div class="relative-test hentry" style="margin-bottom: 100px;">
  		Image 3 section
  	</div> -->

    <?php if ( get_option( 'ups_sidebars' ) != array() ) : ?>
      <?php dynamic_sidebar( apply_filters( 'ups_sidebar', 'sidebar-main' ) ); ?>
    <?php else : ?>
      <?php dynamic_sidebar( 'sidebar-main' ); ?>
    <?php endif; ?>
  </aside>

<?php endif; ?>