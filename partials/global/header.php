<header class="c-header u-bgBlack u-py20" role="banner">
  <div class="l-container u-flex-md u-itemsCenter-md u-justifyBetween-md">
    <h1>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="u-flex-xs u-itemsCenter-xs" aria-label="<?php bloginfo(); ?>">
        <?php bml_the_svg( 'icon-bymattlee', '0 0 50 50', 'c-header-logoSvg u-block' ); ?>
        <span class="u-hide u-uppercase u-block-xs u-font22-xs u-ml10-xs"><?php bloginfo(); ?></span>
      </a>
    </h1>
    <div class="u-flex-md u-itemsCenter-md u-justifyBetween-md">
      <nav class="o-nav o-nav--header" role="navigation">
        <?php bml_the_menu( 'primary_menu' ); ?>
      </nav>
      <div class="u-ml40-md">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</header>