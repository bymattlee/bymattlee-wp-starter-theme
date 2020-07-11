<?php $footer_tags = get_field( 'footer_tags', 'option' ); ?>

  </section>

  <?php get_template_part( 'partials/global/footer' ); ?>

  <?php wp_footer(); ?>

  <?php echo $footer_tags ? $footer_tags : ''; ?>
  
</body>
</html>