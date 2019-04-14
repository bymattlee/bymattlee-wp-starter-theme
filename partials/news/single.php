<article>

	<?php if ( has_post_thumbnail() ) : ?>
		<figure>
			<?php the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

	<header>
		<?php if ( get_the_title() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php endif; ?>

		<time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>

		<div><?php printf( __( 'By: %s', 'bymattlee' ), get_the_author_posts_link() ); ?></div>

		<?php if ( get_the_category_list() ) : ?>
			<div><?php printf( __( 'Categories: %s', 'bymattlee' ), get_the_category_list(', ') ); ?></div>
		<?php endif; ?>

		<?php if ( get_the_tag_list() ) : ?>
			<div><?php printf( __( 'Tags: %s', 'bymattlee' ), get_the_tag_list('', ', ', '') ); ?></div>
		<?php endif; ?>
	</header>
	
	<?php if ( get_the_content() ) : ?>
		<div class="o-rich_text_editor js-rich_text_editor">
			<?php the_content(); ?>
		</div>
	<?php endif; ?>
</article>