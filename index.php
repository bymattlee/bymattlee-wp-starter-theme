<?php get_header(); ?>

<div data-router-wrapper>
  <div class="l-container u-grid u-gap-60 md:u-grid-cols-3 md:u-gap-80" data-router-view="index">
    <main class="md:u-col-span-2" role="main" data-s2r="group">
      <header>
        <h1 class="u-h1" data-s2r-el="block-fade-up">Latest Posts</h1>
      </header>

      <div class="u-mt-20 md:u-mt-40" data-s2r-el="stagger-fade-up" data-s2r-delay="0.2">

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
</div>

<?php get_footer(); ?>