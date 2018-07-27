<header class="c-header" role="banner">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo(); ?></a></h1>
	<nav class="o-site_nav" role="navigation">
		<?php 
			wp_nav_menu( 
				array( 
					'theme_location' => 'main_menu', 
					'menu_class' => 'o-site_nav-menu',
					'walker' => new Site_Nav_Walker()
				) 
			);
		?>
	</nav>
	<?php get_search_form(); ?>
</header>