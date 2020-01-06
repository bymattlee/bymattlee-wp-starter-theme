<?php get_header(); ?>

<div class="l-container">
  <main role="main">
    <header>
      <h1><?php the_archive_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/news/preview' ); ?>

      <?php endwhile; ?>

      <?php get_template_part( 'partials/global/pagination-archive' ); ?>

    <?php else : ?>

      <?php get_template_part( 'partials/global/not_found' ); ?>

    <?php endif; ?>

  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>