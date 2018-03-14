<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );


function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
	);

	register_post_type( 'about_services',
        array(
            'labels' => array(
                'name' => __( 'About Services' ),
                'singular_name' => __( 'About Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'about-services' ),
        )
	);
	
}
add_action( 'init', 'create_custom_post_types' );





// Reverse Case Studies Archive order




function accelerate_child_excerpt_more( $more ) {
    if ( is_home() ) {
    return ' <a class="read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'accelerate-theme-child') . '</a>';
    }
}
add_filter( 'excerpt_more', 'accelerate_child_excerpt_more' );