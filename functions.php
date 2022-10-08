<?php 
// nave menu calling function strt
function megakit_nav(){


    load_default_textdomain('themecamp',get_template_directory_uri().'/');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails',array('post','service'));

    register_nav_menus(array(

        'primary' => __('primary','themecamp'),
    ));

}

add_action('after_setup_theme','megakit_nav');
// nave menu calling function end

// service custom post
function megakit_cpt(){
    $labels = array(
        'name'                  => __( 'Services', 'service type general name', 'service' ),
        'singular_name'         => __( 'Services', 'service type singular name', 'service' ),
        'menu_name'             => __( 'Service', 'Admin Menu text', 'service' ),
        'not_found'             => __( 'No Services Found.', 'Admin Menu text','recipe'),

    );
    $args = array(
        'public'    => true,
        'label' => $labels,
        'label'     => __( 'service', 'themecamp' ),
        'menu_icon' => 'dashicons-book',

        'supports' => array('title','editor','thumbnail'),
        );
    register_post_type( 'Service', $args );

    $labels = array(
        'name'                  => __( 'Testimonial', 'service type general name', 'service' ),
        'singular_name'         => __( 'Testimonial', 'service type singular name', 'service' ),
        'menu_name'             => __( 'Testimonial', 'Admin Menu text', 'service' ),
        'not_found'             => __( 'No Testimonial Found.', 'Admin Menu text','recipe'),

    );
    $args = array(
        'public'    => true,
        'label' => $labels,
        'label'     => __( 'Testimonial', 'themecamp',''),
        'menu_icon' => 'dashicons-book',

        'supports' => array('title','editor','custom-fields'),
        );
    register_post_type( 'Testimonial', $args );



}
 
add_action('init','megakit_cpt');



function megakit_mega(){

    wp_enqueue_style('bootstrap',get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0.0','all');

    wp_enqueue_style('owl-carousel',get_template_directory_uri() .'/assets/css/owl.carousel.min.css"', array(), '1.0.0','all');

    wp_enqueue_style('slicknav-css',get_template_directory_uri() .'/assets/css/slicknav.css', array(), '1.0.0','all');

    wp_enqueue_style('font-awesome-',get_template_directory_uri() .'/assets/css/fontawesome-all.min.css', array(), '1.0.0','all');

    wp_enqueue_style('slick',get_template_directory_uri() .'/assets/css/slick.css', array(), '1.0.0','all');

    wp_enqueue_style('ootstrap',get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0.0','all');

    wp_enqueue_style('style',get_template_directory_uri() .'/assets/css/style.css', array(), '1.0.0','all');
    wp_enqueue_style('main',get_stylesheet_uri());

// js file load
wp_enqueue_script('popper',get_template_directory_uri() .'/assets/js/popper.min.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('bootstrap',get_template_directory_uri() .'/assets/js/ootstrap.min.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('slicknav',get_template_directory_uri() .'/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('owl',get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('slick',get_template_directory_uri() .'/assets/js/slick.min.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('sticky',get_template_directory_uri() .'/assets/js/jquery.sticky.js', array('jquery'), '1.0.0',true);
wp_enqueue_script('main',get_template_directory_uri() .'/assets/js/main.js', array('jquery'), '1.0.0',true);


    
}

add_action('wp_enqueue_scripts','megakit_mega');

function widget_hok(){
    register_sidebar( array(
		'name'          => __( 'footer-1', 'themecamp' ),
		'id'            => 'footer-1',
		'description'   => __( 'this is custom widgets', 'themecamp' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );


}
add_action('widgets_init','widget_hok');
// class my_widget extends WP_Widget(){

// }
// $my_widget = new my_widget();