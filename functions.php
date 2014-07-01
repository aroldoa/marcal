<?php

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );


	/**
	* Proper way to enqueue scripts and styles
	*/
	function theme_name_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.1.0', true );
		wp_enqueue_script( 'slippryjs', get_template_directory_uri() . '/js/slippry.min.js', array(), '1.2.0', true );
		wp_enqueue_script( 'eleganticons', get_template_directory_uri() . '/js/lte-ie7.js', array(), '1.3.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    register_nav_menus( array(
    	'primary' => 'Primary Navigation',
    	'footer' => 'Footer Navigation'
    	));

    add_theme_support('post-thumbnails');

    add_action('init', 'jobs');

    function jobs()
    {
    	register_post_type('jobs',
    		array(
    			'labels' => array(
    				'name' => __('Jobs'),
    				'singular_name' => __('Job'),
    				'all_items' => __('All Jobs'),
    				'add_new' => __('Add New Jobs'),
    				'add_new_item' => __('Add A New Job'),
    				'new_item' => __('Add Job'),
    				'edit_item' => __('Edit Job'),
    			),
    			'description' => 'Use this panel to add images to the site Jobs',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 20,
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'thumbnail',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }


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

    	register_sidebar(array(
    		'name' => 'Job Sidebar',
    		'id'   => 'job-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));

    	register_sidebar(array(
    		'name' => 'Blog Sidebar',
    		'id'   => 'blog-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));


    }

?>