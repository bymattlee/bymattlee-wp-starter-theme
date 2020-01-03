<footer class="c-footer" role="contentinfo">
  <div class="l-container">
    <h4><?php printf( '%1$s %2$s %3$s', '&copy;', date( 'Y' ), get_bloginfo() ); ?></h4>
    <nav class="o-nav o-nav--footer" role="navigation">
      <?php bml_the_menu( 'footer_menu' ); ?>
    </nav>
  </div>
</footer>