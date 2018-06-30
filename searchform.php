<form method="get" action="<?php echo home_url( '/' ); ?>" role="search">
	<input type="text" name="s" placeholder="<?php _e( 'Search', 'bymattlee' ); ?>" value="<?php the_search_query(); ?>">
	<button type="submit" role="button"><?php _e( 'Go', 'bymattlee' ); ?></button>
</form>