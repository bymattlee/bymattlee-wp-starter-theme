<section>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure>
			<img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>" width="<?php echo wp_get_attachment_metadata( get_post_thumbnail_id() )[ 'width' ]; ?>">
		</figure>
	<?php endif; ?>

	<?php if ( get_the_title() ) : ?>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
	<?php endif; ?>
	
	<?php if ( get_the_content() ) : ?>
		<div class="o-rich_text_editor js-rich_text_editor">
			<?php the_content(); ?>
		</div>
	<?php endif; ?>
</section>