<?php
/*
Plugin Name: Original Css3 Image Hover Effects
Plugin URI: https://wordpress.org/plugins/original-css3-image-hover-effects/
Description: Original Css3 Image Hover Effects Is Fully Responsive & Mobile Optimized Css3 Hover Effects. Original Image hover effects are created using only pure CSS3 properties. No JavaScript. Easy to use the amazing Image Hover Effects for your website.
Author: codecans
Author URI: http://codecans.com/
Version: 2.4.6
*/

//Loading CSS file
function orginal_css3_effects_style() {	
	wp_enqueue_style('orginal_main_style', plugins_url( '/css/orginal_main_style.css' , __FILE__ ) );
	wp_enqueue_style('orginal_effects_mod', plugins_url( '/css/orginal_effects_mod.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'orginal_css3_effects_style' );


// Added Admin Font Awesome
function original_css3_admin_enqueue_add_init() {
    if ( is_admin() ) {
		wp_enqueue_style( 'org_css3_master_font_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', __FILE__ );
    }
}
add_action( 'admin_enqueue_scripts', 'original_css3_admin_enqueue_add_init' );


// Loading VafPress Framework
if(!class_exists('VP_orgcsshoverAutoLoader')){
// Setup Contants
defined( 'VP_ORGHOVER_VERSION' ) or define( 'VP_ORGHOVER_VERSION', '2.0' );
defined( 'VP_ORGHOVER_URL' )     or define( 'VP_ORGHOVER_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_ORGHOVER_DIR' )     or define( 'VP_ORGHOVER_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_ORGHOVER_FILE' )    or define( 'VP_ORGHOVER_FILE', __FILE__ );

// Looding Bootstrap
require 'framework/bootstrap.php';
}

// added widgets filters
add_filter('widget_text', 'do_shortcode');

// Registering Custom Post type
function orginal_hover_effects_custom_post() {
	register_post_type( 'orginal-hover',
		array(
			'labels' => array(
				'name' => __( 'Orgin Hov Effect' ),
				'singular_name' => __( 'Hover Effect' ),
				'add_new_item' => __( 'Add New Item' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'hover-effects'),
			'menu_icon' => '',
			'menu_position' => 20,
		)
	);	
}
add_action( 'init', 'orginal_hover_effects_custom_post' );

// Registering Custom post's category
function orginal_hover_effects_custom_post_taxonomy() {
	register_taxonomy(
		'orginal_cat',  
		'orginal-hover',
		array(
			'hierarchical'          => true,
			'label'                 => 'Orginal Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'orginal-category',
				'with_front'    => true
				)
			)
	);
}
add_action( 'init', 'orginal_hover_effects_custom_post_taxonomy'); 
require 'admin/icon.php';

// Loading Metaboxes 
new VP_Metabox(array
(
			'id'          => 'org_hov_meta',
			'types'       => array('orginal-hover'),
			'title'       => __('Hover Information ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_ORGHOVER_DIR . '/admin/metabox/main.php'
));

// calling shortcode
require ('admin/org_main_shortcode.php');

//Shortcode Generator 
    function orgin_hover_shortcodegenerator(){
    $tmpl_sg = array(
    'name' => 'sg_4',
    'template' => VP_ORGHOVER_DIR . '/admin/shortcode_generator.php',
    'modal_title' => __( 'Original Hov Shortcode', 'vp_textdomain'),
    'button_title' => __( 'Original Hov Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_ORGHOVER_URL . 'images/org_shortcode_icon.png',
    'sprite_image' => VP_ORGHOVER_URL . 'images/org_shortcode_icon.png',
    );
    
	$sg = new VP_ShortcodeGenerator($tmpl_sg);
    
	}
	
    add_action( 'after_setup_theme', 'orgin_hover_shortcodegenerator' );
	