<?php

get_template_part('/inc/acf');

function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery','course'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
		add_editor_style("/assets/css/editor.css");
		//css blank takbe

		

}
add_action('after_setup_theme', 'halim_setup');



function halim_assets() {
    

    // css
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'templatemo', get_template_directory_uri() . '/assets/css/templatemo-grad-school.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );


    // js
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/tabs.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'video', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );


}   
add_action('wp_enqueue_scripts', 'halim_assets');



// Custom Posts
function halim_custom_posts() {

    // Slider Custom Post
    register_post_type('course', array(
        'labels' => array(
            'name' => __('Course', 'halim'),
            'singular_name' => __('course', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true
    ));



}
add_action('init', 'halim_custom_posts');