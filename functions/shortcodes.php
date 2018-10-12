<?php 
	// Admin Email
	function bsc_admin_email_shortcode() {
		$bsc_admin_email = get_option('admin_email');
		return '<a href="mailto:'.$bsc_admin_email.'">'.$bsc_admin_email.'</a>';
	}
	add_shortcode( 'admin-email', 'bsc_admin_email_shortcode' );

	// Site URL
	function bsc_siteurl_shortcode() {
		$bsc_siteurl = get_option('siteurl');
		return '<a href="'.$bsc_siteurl.'">'.$bsc_siteurl.'</a>';
	}
	add_shortcode( 'siteurl', 'bsc_siteurl_shortcode' );

	// Blog Name
	function bsc_blogname_shortcode() {
		$bsc_blogname = get_option('blogname');
		return $bsc_blogname;
	}
	add_shortcode( 'blogname', 'bsc_blogname_shortcode' );
?>
