<?php get_header(); ?>

<div data-router-wrapper>
  <div class="l-container u-grid u-gap-60 md:u-grid-cols-3 md:u-gap-80" data-router-view="404">
    <main class="md:u-col-span-2" role="main" data-s2r="single" data-s2r-type="stagger-fade-up">
      <header>
        <h1 class="u-h2" data-s2r-el><?php _e( 'Page Not Found', 'bymattlee' ); ?></h1>
      </header>
      <div class="u-rich-text u-mt-20 md:u-mt-40">
        <p data-s2r-el><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'bymattlee' ); ?></p>
        <p data-s2r-el><a href="<?php echo home_url(); ?>" class="o-button"><?php _e( 'Go Home', 'bymattlee' ); ?></a></p>
      </div>
    </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>