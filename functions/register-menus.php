<?php
	function register_my_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu') //Default Main Nav Menu
				)  
		);
	}
	add_action( 'init', 'register_my_menus' );
?>