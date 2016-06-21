<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="msapplication-tap-highlight" content="no">

<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="<?php bloginfo(); ?>">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo(); ?>">

<meta name="msapplication-TileColor" content="#000000">

<meta name="theme-color" content="#000000">

<?php wp_head(); ?>

<?php

	// Google Analytics
	$google_analytics_tracking_id = get_field( 'google_analytics_tracking_id', 'option' );

	if ( $google_analytics_tracking_id ) :

?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $google_analytics_tracking_id ?>', 'auto');
	ga('send', 'pageview');
</script>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>
	<header class="c-header" role="banner">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo(); ?></a></h1>
		<nav class="o-site_nav" role="navigation">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'main_menu', 
					'menu_class' => 'o-site_nav-menu',
					'walker' => new Site_Nav_Walker()
				) );
			?>
		</nav>
		<?php get_search_form(); ?>
	</header>

	<br><hr><br>

	<section class="l-content clearfix">