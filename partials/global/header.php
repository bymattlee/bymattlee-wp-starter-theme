<header class="c-header" role="banner">
  <div class="l-container">
    <h1>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bml_the_svg( 'icon-bymattlee', '0 0 50 50', 'c-header-logo_svg u-block' ); ?>
        <?php bloginfo(); ?>
      </a>
    </h1>
    <nav class="o-nav o-nav--header" role="navigation">
      <?php bml_the_menu( 'primary_menu' ); ?>
    </nav>
    <?php get_search_form(); ?>
  </div>
</header>