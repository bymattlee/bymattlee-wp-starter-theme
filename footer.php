	</section>

	<br><hr><br>

	<footer class="c-footer" role="contentinfo">
		<h4><?php printf( '%1$s %2$s %3$s', '&copy;', date( 'Y' ), get_bloginfo() ); ?></h4>
		<nav class="o-site_nav" role="navigation">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'main_menu', 
					'menu_class' => 'o-site_nav-menu',
					'walker' => new Site_Nav_Walker()
				) );
			?>
		</nav>
	</footer>

<?php wp_footer(); ?>
	
</body>
</html>