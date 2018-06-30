<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Utilities
	** ***** ----------------------------------------------- ***** */

	// Archive pagination
	function bml_the_archive_pagination() {

		// If there is a next or previous page, display archive pagination block
		if ( get_next_posts_link() || get_previous_posts_link() ) {

			$markup  = '<div class="c-archive_pagination">';

			if ( get_next_posts_link() ) {
				$next_posts_page_link = get_next_posts_page_link();

				$markup .= '<div>';
				$markup .= '<a href="' . $next_posts_page_link . '" class="c-archive_pagination-item">' . __( 'Next Page &raquo;', 'bymattlee' ) . '</a>';
				$markup .= '</div>';
			}

			if ( get_previous_posts_link() ) {
				$previous_posts_page_link = get_previous_posts_page_link();

				$markup .= '<div>';
				$markup .= '<a href="' . $previous_posts_page_link . '" class="c-archive_pagination-item">' . __( '&laquo; Previous Page', 'bymattlee' ) . '</a>';
				$markup .= '</div>';
			}

			$markup .= '</div>';

			echo $markup;

		}
	}

	// Post pagination
	function bml_the_post_pagination() {

		// If there is a next or previous post, display post pagination block
		if ( get_previous_post() || get_next_post() ) {

			$markup  = '<div>';

			if ( get_previous_post() ) {
				$previous_post = get_previous_post();

				$markup .= '<div>';
				$markup .= '<a href="' . get_permalink( $previous_post->ID ) . '">' . __( '&laquo; Previous Post', 'bymattlee' ) . '</a>';
				$markup .= '</div>';
			}

			if ( get_next_post() ) {
				$next_post = get_next_post();

				$markup .= '<div>';
				$markup .= '<a href="' . get_permalink( $next_post->ID ) . '">' . __( 'Next Post &raquo;', 'bymattlee' ) . '</a>';
				$markup .= '</div>';
			}

			$markup .= '</div>';

			echo $markup;

		}

	}

	// Get page URL by page slug
	function bml_get_page_url_by_slug( $slug ) {
		return get_permalink( get_page_by_path( $slug ) );
	}

	// Print the image's srcset for lazyload
	function bml_the_image_srcset( $image_id ) {

		if ( !$image_id ) return;

		$image_labels = [ 'size_400', 'size_600', 'size_800', 'size_1000', 'size_1200', 'size_1400', 'size_1600', 'size_1800', 'full' ];
		$image_set = [];

		foreach ( $image_labels as $image_label ) {

			$image = wp_get_attachment_image_src( $image_id, $image_label );
			$image_url = $image[0];
			$image_width = $image[1];

			$image_set[] =  $image_url . ' ' . ( $image_width - 200 ) . 'w' ;
		}

		$image_set = array_unique( $image_set );

		echo implode( ', ', $image_set );

	}

?>