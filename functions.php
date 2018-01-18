<?php



function all_fuction(){

// theme main pic 
	add_theme_support('post-thumbnails');


// post side menu 
	add_theme_support('post-formats',array(
		'aside',
		'gallary',
		'qoute',
		'gallery',
		'aside'));


// add css 

	add_action('wp_enqueue_scripts','my_own_script');

if(!function_exists('my_own_script')){


	function my_own_script (){

		wp_enqueue_style('style',get_stylesheet_directory_uri().'/assets/css/basic.css');


		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
	}

}


// add menu

add_action('init','my_custome_menu');

if (!function_exists('my_custome_menu')) {
	function my_custome_menu(){
		register_nav_menu('nav','main manu');
		register_nav_menu('foot','footer manu');



	}
}

require_once('/inc/custome.php');
require_once('/inc/init.php');



if(!function_exists('self')){
	function self(){




		register_sidebar(array(
				'id'=> 'left',
				'name'=> 'left side bar',
				'description' => ' this is for left  ',
				'before_wedget'=>'<div>',
				'after_wedget'=>'</div>',
				'before_title'=>'<h2>',
				'after_title'=> '</h2>'

			));
		register_sidebar(array(
				'id' => '1st',
				'name'=> 'right side bar',
				'description' => ' this is for right  ',
				'before_wedget'=>'<div style="color:red ; ,background-color:blue;" >',
				'after_wedget'=>'</div>',
				'before_title'=>'<h2>',
				'after_title'=> '</h2>'

			));
	}
}

add_action('widgets_init','self');


// redux

if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/sample/sample-config.php' );
}

}


add_action('after_setup_theme','all_fuction');









































?>