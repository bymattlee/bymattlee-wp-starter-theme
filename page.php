<?php get_header(); ?>

<div data-router-wrapper>
  <div class="l-container u-grid u-gap-60 md:u-grid-cols-3 md:u-gap-80" data-router-view="page">
    <main class="md:u-col-span-2" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/default' ); ?>

      <?php endwhile; ?>

    </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>