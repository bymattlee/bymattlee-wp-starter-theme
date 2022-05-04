<section>
  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="u-mb-20">
      <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
    </figure>
  <?php endif; ?>

  <?php if ( get_the_title() ) : ?>
    <header>
      <h1 class="u-h2"><?php the_title(); ?></h1>
    </header>
  <?php endif; ?>
  
  <?php if ( get_the_content() ) : ?>
    <div class="u-rich-text u-mt-30 md:u-mt-50 js-richText">
      <?php the_content(); ?>
    </div>
  <?php endif; ?>
</section>