<?php get_header(); ?>

<div class="l-container u-grid u-gap-60 md:u-grid-cols-3 md:u-gap-80">
  <main class="md:u-col-span-2" role="main">
    <header>
      <h1 class="u-h2"><?php the_archive_title(); ?></h1>
    </header>

    <div class="u-mt-20 md:u-mt-40">

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