<?php

	if ( ! function_exists('bsc_after_theme_setup') ) {
		function bsc_after_theme_setup()  {
	
		$custom_logo_defaults = array(
				'height'      => 100,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
			);
		add_theme_support( 'custom-logo', $custom_logo_defaults );

		add_theme_support( 'post-formats', array( ) );

		add_theme_support( 'post-thumbnails', array( ) );

		add_theme_support( 'custom-header', array(
		  'flex-height' => true,
		  'height' => 300,
		  'flex-width' => true,
		  'width' => 1920,
		) );
		
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		add_theme_support( 'title-tag' );
		
		}

	add_action( 'after_setup_theme', 'bsc_after_theme_setup' );

	}
	
	function bsc_add_editor_styles() {
			add_editor_style( get_stylesheet_uri() );
		}
	add_action( 'init', 'bsc_add_editor_styles' );
					
	if ( !function_exists( 'wpex_pagination' ) ) {
		
		function wpex_pagination() {
			
			$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
			$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
			
			global $wp_query;
			$total = $wp_query->max_num_pages;
			$big = 999999999; // need an unlikely integer
			if( $total > 1 )  {
				 if( !$current_page = get_query_var('paged') )
					 $current_page = 1;
				 if( get_option('permalink_structure') ) {
					 $format = 'page/%#%/';
				 } else {
					 $format = '&paged=%#%';
				 }
				echo paginate_links(array(
					'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> $format,
					'current'		=> max( 1, get_query_var('paged') ),
					'total' 		=> $total,
					'mid_size'		=> 3,
					'type' 			=> 'list',
					'prev_text'		=> $prev_arrow,
					'next_text'		=> $next_arrow,
				 ) );
			}
		}
		
	}

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	function remove_revslider_meta_tag() {
		return '';
	}
	add_filter( 'revslider_meta_generator', 'remove_revslider_meta_tag' );

	//Remove H1 from WP Editor
	function remove_h1_from_editor( $settings ) {
		$settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
		return $settings;
	}
	add_filter( 'tiny_mce_before_init', 'remove_h1_from_editor' );
	
?>