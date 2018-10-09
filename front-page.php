<?php 
	/*Template Name: Home*/
	get_header();
	echo do_shortcode('[rev_slider alias="home_slider"]');
	get_template_part('inc/intro-home');
	get_template_part('inc/funnels-home');
	get_template_part('inc/site-wide-cta');
	get_footer(); 
?>
