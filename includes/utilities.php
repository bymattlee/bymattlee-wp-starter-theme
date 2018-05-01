<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Utilities
	** ***** ----------------------------------------------- ***** */

	// Archive pagination
	function bml_the_archive_pagination() {

		// If there is a next or previous page, display archive pagination block
		if ( get_next_posts_link() || get_previous_posts_link() ) {

			$markup  = '<div>';

			if ( get_next_posts_link() ) {
				$next_posts_page_link = get_next_posts_page_link();

				$markup .= '<div>';
				$markup .= '<a href="' . $next_posts_page_link . '">' . __( 'Next Page &raquo;', 'bymattlee' ) . '</a>';
				$markup .= '</div>';
			}

			if ( get_previous_posts_link() ) {
				$previous_posts_page_link = get_previous_posts_page_link();

				$markup .= '<div>';
				$markup .= '<a href="' . $previous_posts_page_link . '">' . __( '&laquo; Previous Page', 'bymattlee' ) . '</a>';
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

?>