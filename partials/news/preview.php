<article class="u-mt-40 md:u-mt-60">
  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="u-mb-20">
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
      </a>
    </figure>
  <?php endif; ?>

  <header>
    <?php if ( get_the_title() ) : ?>
      <h3 class="u-h2"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>
    <div class="u-text-14 u-uppercase u-flex u-flex-wrap u-mt-5">
      <time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>
      <span class="u-mx-5">/</span>
      <div><?php printf( __( 'By: %s', 'bymattlee' ), get_the_author_posts_link() ); ?></div>
      <?php if ( get_the_category_list() ) : ?>
        <span class="u-mx-5">/</span>
        <div><?php printf( __( 'Categories: %s', 'bymattlee' ), get_the_category_list( ', ' ) ); ?></div>
      <?php endif; ?>
      <?php if ( get_the_tag_list() ) : ?>
        <span class="u-mx-5">/</span>
        <div><?php printf( __( 'Tags: %s', 'bymattlee' ), get_the_tag_list( '', ', ', '' ) ); ?></div>
      <?php endif; ?>
    </div>
  </header>
  
  <?php if ( get_the_excerpt() ) : ?>
    <div class="u-mt-20">
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>
</article>