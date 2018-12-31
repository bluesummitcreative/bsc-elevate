<?php
	//Widget Counter
	function custom_widgets_count($params) {
 
	  $sidebar_id = $params[0]['id'];
	    /* Footer widgets */
	    if ( $sidebar_id == 'footer' ) {
		$total_widgets = wp_get_sidebars_widgets();
		$sidebar_widgets = count($total_widgets[$sidebar_id]);
		$params[0]['before_widget'] = str_replace('class="', 'class="col-md-' . floor(12 / $sidebar_widgets) . ' ', $params[0]['before_widget']);
	    }
	  return $params;
	}
	add_filter('dynamic_sidebar_params','custom_widgets_count');

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
				'name' => __( 'Footer'),
				'id' => 'footer',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>',
				)
		);
		
	}
	add_action( 'widgets_init', 'custom_sidebars' );	
?>
