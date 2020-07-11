<?php get_header(); ?>

<div class="l-container l-container--small">
  <main role="main">
    <header>
      <h1 class="u-h2">Latest Posts</h1>
    </header>

    <div class="u-mt20 u-mt40-md">

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'partials/news/preview' ); ?>

        <?php endwhile; ?>

        <?php get_template_part( 'partials/global/pagination-archive' ); ?>

      <?php else : ?>

        <?php get_template_part( 'partials/global/not_found' ); ?>

      <?php endif; ?>

    </div>

  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>