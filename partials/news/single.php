<article>

  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="u-mb20 u-mb40-md">
      <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>" width="<?php echo wp_get_attachment_metadata( get_post_thumbnail_id() )[ 'width' ]; ?>">
    </figure>
  <?php endif; ?>

  <header>
    <?php if ( get_the_title() ) : ?>
      <h1 class="u-h3"><?php the_title(); ?></h1>
    <?php endif; ?>

    <time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>

    <div><?php printf( __( 'By: %s', 'bymattlee' ), get_the_author_posts_link() ); ?></div>

    <?php if ( get_the_category_list() ) : ?>
      <div><?php printf( __( 'Categories: %s', 'bymattlee' ), get_the_category_list(', ') ); ?></div>
    <?php endif; ?>

    <?php if ( get_the_tag_list() ) : ?>
      <div><?php printf( __( 'Tags: %s', 'bymattlee' ), get_the_tag_list('', ', ', '') ); ?></div>
    <?php endif; ?>
  </header>
  
  <?php if ( get_the_content() ) : ?>
    <div class="o-rich_text_editor u-mt20 u-mt40-md js-rich_text_editor">
      <?php the_content(); ?>
    </div>
  <?php endif; ?>
</article>