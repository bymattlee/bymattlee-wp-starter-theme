<?php get_header(); ?>

<main class="l-main" role="main">

	<header>
		<h1><?php printf( __( 'Search: %s', 'bymattlee' ), get_search_query() ); ?></h1>
	</header>
	
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/post/preview' ); ?>

		<?php endwhile; ?>

		<?php bml_the_archive_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'partials/global/not_found' ); ?>

		<?php get_search_form(); ?>

	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>