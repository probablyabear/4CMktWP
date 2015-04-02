<?php

	function theme_styles() {

		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

	}

	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	function theme_js() {

		global $wp_scripts;

		wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' , '', '', false);
		wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' , '', '', false);

		$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );


		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

		wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery') , '', true );

	}

	add_action( 'wp_enqueue_scripts', 'theme_js' );

	// Removes Admin bar at top of site for logged in users
	//add_filter( 'show_admin_bar', '__reutrn_false' );



	add_theme_support( 'menus' );

	function register_theme_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' )
				)
			);
	}

	add_action('init', 'register_theme_menus');



function create_widget($name, $id, $description) {

		register_sidebar(array(
			'name'          => __( $name ),
			'id'            => $id,
			'description'   => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));
	
}

create_widget('Front Page Left', 'front-left', 'Displays on the left of the Homepage.');
create_widget('Front Page Center', 'front-center', 'Displays on the center of the Homepage.');
create_widget('Front Page Right', 'front-right', 'Displays on the right of the Homepage.');


create_widget('Page Sidebar', 'page', 'Displys on the side of pages with a sidebar.');








?>