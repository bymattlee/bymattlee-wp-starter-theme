<section>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure>
			<?php the_post_thumbnail(); ?>
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