<section>

	<?php

		$next_post = get_next_post();

		if ( !empty( $next_post ) ):

	?>

		<div><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php _e( '&lsaquo; Older', 'bymattlee' ); ?></a></div>
	
	<?php

		endif; 

		$previous_post = get_previous_post();

		if ( !empty( $previous_post ) ):

	?>

		<div><a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php _e( 'Newer &rsaquo;', 'bymattlee' ); ?></a></div>
	
	<?php endif; ?>

</section>