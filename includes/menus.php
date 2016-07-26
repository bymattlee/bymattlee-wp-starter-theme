<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Menus
	** ***** ----------------------------------------------- ***** */

	// Register menus
	register_nav_menus(
		array(
			'main_menu'	=> __( 'Main Menu', 'bymattlee' ),
			'footer_menu' => __( 'Footer Menu', 'bymattlee' ),
		)
	);

	// Custom walker for slideout menu that removes all unnecessary classes
	class Site_Nav_Walker extends Walker_Nav_Menu {

		// add main/sub classes to li's and links
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		    global $wp_query;
		    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		  
		    // passed classes
		    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
		    $anchor_classes = array( 'o-site_nav-menu_item' );

		    // if array contains 'current-menu-item', rename to 'current' and add to anchor tag class array
		    if ( in_array( 'current-menu-item', $classes ) ) {
		    	$anchor_classes[] = 'o-site_nav-menu_item--current';
		    }

		    $anchor_classes = esc_attr( implode( ' ', $anchor_classes ) );
		  
		    // build html
		    $output .= $indent . '<li>';
		  
		    // link attributes
		    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		    $attributes .= ' class="' . $anchor_classes . '"';

		    // build content inside of anchor tag
		    $anchor_content = apply_filters( 'the_title', $item->title, $item->ID );
		  
		    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		        $args->before,
		        $attributes,
		        $args->link_before,
		        $anchor_content,
		        $args->link_after,
		        $args->after
		    );
		  
		    // build html
		    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}
	}

?>