<?php get_header(); ?>

<div data-router-wrapper>
  <div class="l-container l-container--small" data-router-view="404">
    <main role="main">
      <header>
        <h1 class="u-h2"><?php _e( 'Page Not Found', 'bymattlee' ); ?></h1>
      </header>
      <p><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'bymattlee' ); ?></p>
      <p><a href="<?php echo home_url(); ?>" class="o-button"><?php _e( 'Go Home', 'bymattlee' ); ?></a></p>
    </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>