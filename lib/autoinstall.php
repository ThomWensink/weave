<?php

namespace Roots\Sage\Autoinstall;

use Roots\Sage\Assets;

add_action( 'tgmpa_register', __NAMESPACE__ . '\\autoinstall_register_required_plugins' );

function autoinstall_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'ACF-Content Analysis for Yoast SEO',
			'slug'      => 'acf-content-analysis-for-yoast-seo',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Duplicator',
			'slug'      => 'duplicator',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'         => 'ACF Pro', // The plugin name.
			'slug'         => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'       => 'https://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=b3JkZXJfaWQ9NzMwMTd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTAxLTE5IDE2OjIyOjAy', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'force_activation'   => true,
		),
		array(
			'name'         => 'Soil', // The plugin name.
			'slug'         => 'soil-master', // The plugin slug (typically the folder name).
			'source'       => dirname( __FILE__ ).'/..//plugins/soil-master.zip',
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'force_activation'   => true,
		),
	);

	$config = array(
		'id'           => 'autoinstall',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}