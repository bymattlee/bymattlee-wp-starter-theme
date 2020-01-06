<?php get_header(); ?>

<div class="l-container">
  <main role="main">
    <header>
      <h1><?php _e( 'Page Not Found', 'bymattlee' ); ?></h1>
    </header>
    <p><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'bymattlee' ); ?></p>
    <p><a href="<?php echo home_url(); ?>" class="o-button"><?php _e( 'Go Home', 'bymattlee' ); ?></a></p>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>