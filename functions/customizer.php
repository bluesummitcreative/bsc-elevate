<?php

add_action( 'customize_register', 'prefix_remove_css_section', 15 );
/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function prefix_remove_css_section( $wp_customize ) {
	$wp_customize->remove_section( 'custom_css' );
}
	
	/*add_action( 'customize_register', 'bsc_customizer' );
	
	function bsc_customizer( $wp_customize ) {
		
		$wp_customize->add_section( 'header_image' , array(
		  'title' => __( 'Header Settings'),
		  'priority' => 30, // Before Widgets.
		) );
		
		$wp_customize->add_setting( 'header_min_height' , array(
			'default' => '172px',
		) );
		
		$wp_customize->add_control(
			'header_min_height', 
			array(
				'label'    => __( 'Header Minimum Height' ),
				'section'  => 'header_image',
				'type' => 'text',
				
			)
		);
		
		$wp_customize->add_setting( 'top_bar_text' , array(
			'default' => '<ul class="list-inline contact-info"><li class="list-inline-item"><a href="#"><i class="fas fa-phone-volume"></i> (123) 456-7890</a></li><li class="list-inline-item"><a href="#"><i class="fas fa-phone-volume"></i> info@domain.com</a></li></ul>',
		) );
		
		$wp_customize->add_control(
			'top_bar_text', 
			array(
				'label'    => __( 'Top Bar Text' ),
				'section'  => 'header_image',
				'type' => 'textarea',
				
			)
		);
		
		$wp_customize->add_setting( 'primary_color' , array(
			'default'     => '#4c7abd',
			'transport'   => 'refresh',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
			'label'    => 'Primary Color',
			'section'  => 'colors',
			'settings' => 'primary_color',
		) ) );
		
		$wp_customize->add_setting( 'secondary_color' , array(
			'default'     => '#dd3333',
			'transport'   => 'refresh',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
			'label'    => 'Secondary Color',
			'section'  => 'colors',
			'settings' => 'secondary_color',
		) ) );
		
		$wp_customize->add_setting( 'header_background_color' , array(
			'default'     => '#ffffff',
			'transport'   => 'refresh',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
			'label'    => 'Header Background Color',
			'section'  => 'colors',
			'settings' => 'header_background_color',
		) ) );	
		
	}

	add_action( 'wp_head', 'bsc_customizer_css_js');

	function bsc_customizer_css_js() {
		?>
			 <style type="text/css">
				 .text-primary, .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link, .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover,h1,.h1, h1 a, .h1 a, h3, .h3, h3 a, .h3 a, h5, .h5, h5 a, .h5 a {color:<?php echo get_theme_mod('primary_color', '#4c7abd'); ?>!important;}
				 
				 .btn-primary, .bg-primary {
					 background-color:<?php echo get_theme_mod('primary_color', '#4c7abd'); ?>!important;
					 color:#fff;
					 border:none;
				 }
				 
				 .btn-primary:hover {
					 background-color:#fff!important;
					 color:<?php echo get_theme_mod('primary_color', '#4c7abd'); ?>;
					 border:none;
				 }
				 
				 h2,.h2,h2 a,.h2 a, h4, .h4, h4 a, .h4 a, h6, .h6, h6 a, .h6 a {color:<?php echo get_theme_mod('secondary_color', '#dd3333'); ?>!important;}
				 
				 header.header {
					background-color:<?php echo get_theme_mod('header_background_color', '#ffffff'); ?>;
					min-height:<?php echo get_theme_mod('header_min_height', '172px'); ?>;
				 }
			 </style>
			 

		<?php
	}*/
?>
