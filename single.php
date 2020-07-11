<?php get_header(); ?>

<div class="l-container l-container--small">
  <main role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'partials/news/single' ); ?>

      <?php get_template_part( 'partials/global/pagination-single' ); ?>

    <?php endwhile; ?>

  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>