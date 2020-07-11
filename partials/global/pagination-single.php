<?php if ( get_next_post() || get_previous_post() ) : ?>
  <div class="u-mt40 u-mt60-md">

    <?php if ( get_next_post() ) : ?>
      <?php $previous_post = get_next_post(); ?>
      <a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php _e( '&laquo; Previous Post', 'bymattlee' ); ?></a>
    <?php endif; ?>

    <?php if ( get_previous_post() ) : ?>
      <?php $next_post = get_previous_post(); ?>
      <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php _e( 'Next Post &raquo;', 'bymattlee' ); ?></a>
    <?php endif; ?>

  </div>
<?php endif; ?>