<section>
	
	<?php if ( get_next_posts_link() ) : ?>
	
	<div><?php next_posts_link( __( '&laquo; Older Posts', 'bymattlee' ) ); ?></div>

	<?php endif; ?>

	<?php if ( get_previous_posts_link() ) : ?>
	
	<div><?php previous_posts_link( __( 'Newer Posts &raquo;', 'bymattlee' ) ); ?></div>

	<?php endif; ?>

</section>