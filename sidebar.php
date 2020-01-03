<?php if ( is_active_sidebar( 'default_sidebar' )  ) : ?>

<br><hr><br>

<aside role="complementary">
  <?php dynamic_sidebar( 'default_sidebar' ); ?>
</aside>

<?php endif; ?>