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

		// Rename sub menu class name
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"o-site_nav-sub_menu\">\n";
		}

		// Add main/sub classes to li's and links
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			global $wp_query;
			$item_output = '';
			$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

			// Passed classes
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$anchor_classes = array( 'o-site_nav-menu_item' );

			// If custom classes are used, add to anchor tag
			if ( $classes[0] != '' ) {
				$anchor_classes[] = $classes[0];
			}

			// If array contains 'current-menu-item', rename to 'current' and add to anchor tag class array
			if ( in_array( 'current-menu-item', $classes ) ) {
				$anchor_classes[] = 'o-site_nav-menu_item--current';
			}

			$anchor_classes = esc_attr( implode( ' ', $anchor_classes ) );

			// Build html
			// If current item has a submenu, add class to list item
			$output .= $indent . '<li class="o-site_nav-menu_list_item' . ( ( in_array( 'menu-item-has-children', $classes ) ) ? " o-site_nav-menu_list_item--has_submenu" : "" ) . '">';

			// Link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$attributes .= ' class="' . $anchor_classes . '"';

			// Build content inside of anchor tag
			$anchor_content = apply_filters( 'the_title', $item->title, $item->ID );

			if ( is_object( $args) ) {
				$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
					$args->before,
					$attributes,
					$args->link_before,
					$anchor_content,
					$args->link_after,
					$args->after
				);
			}

			// Build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}
	}

?>