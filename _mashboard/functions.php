<?php






add_filter('show_admin_bar', '__return_false');

if ( ! is_admin() ) {
	add_action( 'init', 'mashboard_enqueue' );
	
}


add_action( 'wp_head', 'mashboard_enqueue_head_scripts' );

if ( ! function_exists( 'mashboard_enqueue' ) ) {
	function mashboard_enqueue() {
		
		wp_register_style( 'normalize_stylesheet', get_stylesheet_directory_uri().'/_mashboard/css/normalize.css', null, '0.1', 'all' );
		wp_register_style( 'main_stylesheet', get_stylesheet_directory_uri().'/_mashboard/css/main.css', null, '0.1', 'all' );
		wp_register_style( 'max_stylesheet', get_stylesheet_directory_uri().'/_mashboard/css/max.css', null, '0.1', 'all' );
		wp_register_style( 'item_stylesheet', get_stylesheet_directory_uri().'/_mashboard/css/item.css', null, '0.1', 'all' );
		wp_register_style( 'nexuscomponent_stylesheet', get_stylesheet_directory_uri().'/_mashboard/nexus/component.css', null, '0.1', 'all' );
		wp_register_style( 'nexusdemo_stylesheet', get_stylesheet_directory_uri().'/_mashboard/nexus/demo.css', null, '0.1', 'all' );
		wp_register_style( 'nexus_stylesheet', get_stylesheet_directory_uri().'/_mashboard/nexus/nexus.css', null, '0.1', 'all' );
		
		wp_register_style( 'mashboard_stylesheet', get_stylesheet_directory_uri().'/_mashboard/mashboard.css', null, '0.1', 'all' );
		
		
		
		wp_enqueue_style( 'normalize_stylesheet' );
		wp_enqueue_style( 'main_stylesheet' );
		wp_enqueue_style( 'max_stylesheet' );
		wp_enqueue_style( 'item_stylesheet' );
		wp_enqueue_style( 'nexuscomponent_stylesheet' );
		wp_enqueue_style( 'nexusdemo_stylesheet' );
		wp_enqueue_style( 'nexus_stylesheet' );
		wp_enqueue_style( 'mashboard_stylesheet' );
		
		
		
    wp_register_script( 'modernizer_script', get_template_directory_uri() . '/_mashboard/js/modernizr.custom.min.js', array(), '2.5.3', false );
		
		wp_register_script('classie_script', get_template_directory_uri() . '/_mashboard/js/classie.js', null, '', true );
		//wp_register_script('helper_script', get_template_directory_uri() . '/_mashboard/js/helper.js', null, '', true );
		//wp_register_script('grid3d_script', get_template_directory_uri() . '/_mashboard/js/grid3d.js', null, '', true );
		wp_register_script('isotope_script', get_template_directory_uri() . '/_mashboard/js/isotope.pkgd.js', null, '', true );
		wp_register_script('packery_script', get_template_directory_uri() . '/_mashboard/js/packery-mode.pkgd.min.js', null, '', true );
		wp_register_script('init_script', get_template_directory_uri() . '/_mashboard/js/init.js', null, '', true );
		
		wp_register_script('gnmenu_script', get_template_directory_uri() . '/_mashboard/nexus/gnmenu.js', null, '', true );
		
		

 
	
		
wp_enqueue_script( 'modernizer_script');
wp_enqueue_script( 'classie_script');
//wp_enqueue_script( 'helper_script');
//wp_enqueue_script( 'grid3d_script');
wp_enqueue_script( 'isotope_script');
wp_enqueue_script( 'packery_script');
wp_enqueue_script( 'init_script');

wp_enqueue_script( 'gnmenu_script');

	


   
	
		
		
		
	}
}


	

    
  	
	
    
		
		
		
		
		
	
		
	
	
	
	
	
	
	
	
	
	
	


	


?>