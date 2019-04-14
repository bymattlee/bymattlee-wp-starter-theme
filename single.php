<?php get_header(); ?>

<div class="l-container">
	<main class="l-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/post/single' ); ?>

			<?php bml_the_post_pagination(); ?>

		<?php endwhile; ?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>