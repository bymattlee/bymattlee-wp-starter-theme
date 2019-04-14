<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Utilities
	** ***** ----------------------------------------------- ***** */

	// Display menu
	function bml_the_menu( $name ) {

		if ( has_nav_menu( $name ) ) {
			wp_nav_menu( array( 
				'theme_location' => $name, 
				'menu_class' => 'o-nav-menu',
				'walker' => new Site_Nav_Walker()
			) );
		}

	}

	// Display SVG
	function bml_the_svg($filename, $viewbox = '0 0 50 50', $classes = '') {

		$markup  = '<svg viewBox="' . $viewbox . '" aria-hidden="true"' . ( $classes != '' ? ' class="' . $classes . '"' : '' ) . '>';
		$markup .= '<use xlink:href="' . get_template_directory_uri() . '/assets/dist/svgs/sprite.svg#' . $filename .'"></use>';
		$markup .= '</svg>';

		echo $markup;
	}

	// Print the image's srcset for lazyload
	function bml_the_image_srcset( $image_id, $echo = true ) {

		if ( !$image_id ) return;

		$image_labels = [ 'size_400', 'size_600', 'size_800', 'size_1000', 'size_1200', 'size_1400', 'size_1600', 'size_1800', 'full' ];
		$image_set = [];

		foreach ( $image_labels as $image_label ) {

			$image = wp_get_attachment_image_src( $image_id, $image_label );
			$image_url = $image[0];
			$image_width = $image[1];

			$image_set[] =  $image_url . ' ' . ( $image_width - 300 ) . 'w' ;
		}

		$image_set = array_unique( $image_set );

		if ( $echo ) {
			echo implode( ', ', $image_set );
		} else {
			return implode( ', ', $image_set );
		}
		
	}

	// Get page URL by page slug
	function bml_get_page_url_by_slug( $slug ) {
		return get_permalink( get_page_by_path( $slug ) );
	}

	// Get page ID by page path
	function bml_get_page_id_by_path( $path ) {
		$page = get_page_by_path( $path );
		return $page->ID;
	}

?>