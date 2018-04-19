<?php
	// Register Sidebars
	
	function custom_sidebars() {
		register_sidebar( 
			array(
				'name' => __('Default Page Sidebar'),
				'id' => 'sidebar-1',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Blog Sidebar'),
				'id' => 'sidebar-2',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 1'),
				'id' => 'footer-widget-1',
				'before_widget' => '<div class="col-sm-3"><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 2'),
				'id' => 'footer-widget-2',
				'before_widget' => '<div class="col-sm-3"><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 3'),
				'id' => 'footer-widget-3',
				'before_widget' => '<div class="col-sm-3"><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 4'),
				'id' => 'footer-widget-4',
				'before_widget' => '<div class="col-sm-3"><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
	}
	add_action( 'widgets_init', 'custom_sidebars' );
?>
