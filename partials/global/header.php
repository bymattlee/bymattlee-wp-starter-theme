<header class="u-bg-black u-py-20" role="banner">
  <div class="l-container md:u-flex md:u-items-center md:u-justify-between">
    <h1>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="xs:u-flex xs:u-items-center" aria-label="<?php bloginfo(); ?>">
        <?php bml_the_svg( 'icon-bymattlee', '0 0 50 50', 'u-block u-w-40' ); ?>
        <span class="u-hidden u-uppercase md:u-block md:u-text-22 md:u-ml-10"><?php bloginfo(); ?></span>
      </a>
    </h1>
    <nav class="o-nav o-nav--header u-mt-10 md:u-mt-0" role="navigation">
      <?php bml_the_menu( 'primary_menu' ); ?>
    </nav>
  </div>
</header>