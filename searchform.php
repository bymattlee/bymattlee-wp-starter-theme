<form class="u-flex u-mb-40" method="get" action="<?php echo home_url( '/' ); ?>" role="search">
  <input class="u-flex-1 u-bg-transparent u-border u-p-5 u-p-10 u-mr-5 u-w-full" type="text" name="s" placeholder="<?php _e( 'Search', 'bymattlee' ); ?>" value="<?php the_search_query(); ?>">
  <button class="o-button" type="submit" role="button"><?php _e( 'Go', 'bymattlee' ); ?></button>
</form>