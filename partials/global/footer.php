<footer class="c-footer u-bgGreyDark1 u-py40 u-py60 u-textCenter" role="contentinfo">
  <div class="l-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo(); ?>">
      <?php bml_the_svg( 'icon-bymattlee', '0 0 50 50', 'c-footer-logoSvg' ); ?>
    </a>
    <nav class="o-nav o-nav--footer u-mt40" role="navigation">
      <?php bml_the_menu( 'footer_menu' ); ?>
    </nav>
    <p class="u-mt40 u-uppercase u-font12"><?php printf( '%1$s %2$s %3$s', '&copy;', date( 'Y' ), get_bloginfo() ); ?></p>
  </div>
</footer>