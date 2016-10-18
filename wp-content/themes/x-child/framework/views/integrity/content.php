<?php

// =============================================================================
// VIEWS/INTEGRITY/CONTENT.PHP
// -----------------------------------------------------------------------------
// Standard post output for Integrity.
// =============================================================================

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-featured">
  </div>
  <div class='relative-test'>
  <div class='x-column x-sm x-1-2 wrap-image'>

    <?php

      if ( has_post_thumbnail() ) {
          x_child_featured_image();
      }

     ?>

  </div>
  <div class="entry-wrap x-column x-sm x-1-2">
    <?php x_get_view( 'integrity', '_content', 'post-header' ); ?>
    <div id="date-post">
      <?php echo "The Daily Milk   -  ". get_the_date(); ?>
    </div>
    <?php x_get_view( 'global', '_content' ); ?>
  </div>
  <hr class="x-clear">
  </div>
  <?php x_get_view( 'integrity', '_content', 'post-footer' ); ?>
</article>
