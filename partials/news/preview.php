<article>
  <?php if ( has_post_thumbnail() ) : ?>
    <figure>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>" width="<?php echo wp_get_attachment_metadata( get_post_thumbnail_id() )[ 'width' ]; ?>">
      </a>
    </figure>
  <?php endif; ?>

  <header>
    <?php if ( get_the_title() ) : ?>
      <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>

    <time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>

    <div><?php printf( __( 'By: %s', 'bymattlee' ), get_the_author_posts_link() ); ?></div>

    <?php if ( get_the_category_list() ) : ?>
      <div><?php printf( __( 'Categories: %s', 'bymattlee' ), get_the_category_list( ', ' ) ); ?></div>
    <?php endif; ?>

    <?php if ( get_the_tag_list() ) : ?>
      <div><?php printf( __( 'Tags: %s', 'bymattlee' ), get_the_tag_list( '', ', ', '' ) ); ?></div>
    <?php endif; ?>
  </header>
  
  <?php if ( get_the_excerpt() ) : ?>
    <div>
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>
</article>