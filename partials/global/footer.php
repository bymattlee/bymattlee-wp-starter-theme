<footer class="u-bg-grey-dark-1 u-py-40 u-text-center sm:u-py-60" role="contentinfo">
  <div class="l-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo(); ?>">
      <?php bml_the_svg( 'icon-bymattlee', '0 0 50 50', 'u-w-40' ); ?>
    </a>
    <nav class="o-nav o-nav--footer u-mt-40" role="navigation">
      <?php bml_the_menu( 'footer_menu' ); ?>
    </nav>
    <?php if ( have_rows( 'social_sites', 'options' ) ) : ?>
      <nav class="u-mt-40">
        <ul>
          <?php while ( have_rows( 'social_sites', 'options' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'facebook' ) : ?>
              <li class="u-inline-block u-mx-5 md:u-mx-10">
                <a href="<?php the_sub_field( 'facebook_url' ); ?>" class="u-inline-block u-w-30" target="_blank" rel="noopener" aria-label="<?php _e( 'Like On Facebook', 'bymattlee' ); ?>"><?php bml_the_svg( 'icon-facebook' ); ?></a>
              </li>
            <?php elseif ( get_row_layout() == 'twitter' ) : ?>
              <li class="u-inline-block u-mx-5 md:u-mx-10">
                <a href="<?php the_sub_field( 'twitter_url' ); ?>" class="u-inline-block u-w-30" target="_blank" rel="noopener" aria-label="<?php _e( 'Follow On Twitter', 'bymattlee' ); ?>"><?php bml_the_svg( 'icon-twitter' ); ?></a>
              </li>
            <?php elseif ( get_row_layout() == 'instagram' ) : ?>
              <li class="u-inline-block u-mx-5 md:u-mx-10">
                <a href="<?php the_sub_field( 'instagram_url' ); ?>" class="u-inline-block u-w-30" target="_blank" rel="noopener" aria-label="<?php _e( 'Follow On Instagram', 'bymattlee' ); ?>"><?php bml_the_svg( 'icon-instagram' ); ?></a>
              </li>
            <?php elseif ( get_row_layout() == 'youtube' ) : ?>
              <li class="u-inline-block u-mx-5 md:u-mx-10">
                <a href="<?php the_sub_field( 'youtube_url' ); ?>" class="u-inline-block u-w-30" target="_blank" rel="noopener" aria-label="<?php _e( 'Subscribe On YouTube', 'bymattlee' ); ?>"><?php bml_the_svg( 'icon-youtube' ); ?></a>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        </ul>
      </nav>
    <?php endif; ?>
    <p class="u-mt-40 u-uppercase u-text-12"><?php printf( '%1$s %2$s %3$s', '&copy;', date( 'Y' ), get_bloginfo() ); ?></p>
  </div>
</footer>