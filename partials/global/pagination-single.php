<?php if ( get_next_post() || get_previous_post() ) : ?>
  <div class="u-flex u-justify-between u-text-14 u-uppercase u-mt-40 md:u-mt-60">
    <div>
      <?php if ( get_next_post() ) : ?>
        <?php $previous_post = get_next_post(); ?>
        <a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php _e( '&laquo; Previous Post', 'bymattlee' ); ?></a>
      <?php endif; ?>
    </div>
    <div>
      <?php if ( get_previous_post() ) : ?>
        <?php $next_post = get_previous_post(); ?>
        <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php _e( 'Next Post &raquo;', 'bymattlee' ); ?></a>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>