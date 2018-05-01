<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Require Plugins
	** ***** ----------------------------------------------- ***** */

	// Include the TGM_Plugin_Activation class
	require_once( get_template_directory() . '/includes/class-tgm-plugin-activation.php' );

	function bml_register_required_plugins() {

		$plugins = array(

			// Require Advanced Custom Fields PRO plugin
			array(
				'name'      => 'Advanced Custom Fields PRO',
				'slug'      => 'advanced-custom-fields-pro',
				'source'    => 'https://github.com/wp-premium/advanced-custom-fields-pro/archive/master.zip',
				'required'  => true,
			),

			// Require Contact Form 7 plugin
			array(
				'name'      => 'Contact Form 7',
				'slug'      => 'contact-form-7',
				'required'  => true,
			),

			// Require Favicon by RealFaviconGenerator plugin
			array(
				'name'      => 'Favicon by RealFaviconGenerator',
				'slug'      => 'favicon-by-realfavicongenerator',
				'required'  => true,
			),

			// Require Yoast SEO plugin
			array(
				'name'      => 'Yoast SEO',
				'slug'      => 'wordpress-seo',
				'required'  => true,
			),

		);

		$config = array(
			'id'           => 'bymattlee',             // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		);

		tgmpa( $plugins, $config );
	}

	add_action( 'tgmpa_register', 'bml_register_required_plugins' );

?>
