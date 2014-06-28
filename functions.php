<?php

	// Add RSS links to <head> section
	automatic_feed_links();


	/**
	* Proper way to enqueue scripts and styles
	*/
	function theme_name_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.1.0', true );
		wp_enqueue_script( 'slippryjs', get_template_directory_uri() . '/js/slippry.min.js', array(), '1.2.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>