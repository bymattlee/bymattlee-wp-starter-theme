<article>

	<?php if ( has_post_thumbnail() ) : ?>
	<figure>
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
	</figure>
	<?php endif; ?>

	<header>
		<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>
		<div><?php printf( __( 'By: %s', 'bymattlee' ), get_the_author_posts_link() ); ?></div>
		<?php if ( get_the_category_list() ) : ?>
		<div><?php printf( __( 'Categories: %s', 'bymattlee' ), get_the_category_list(', ') ); ?></div>
		<?php endif; ?>
		<?php if ( get_the_tag_list() ) : ?>
		<div><?php printf( __( 'Tags: %s', 'bymattlee' ), get_the_tag_list('', ', ', '') ); ?></div>
		<?php endif; ?>
	</header>
	
	<div>
		<?php the_excerpt(); ?>
	</div>
</article>