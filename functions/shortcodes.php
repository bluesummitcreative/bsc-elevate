<?php 
	// Admin Email
	function bsc_admin_email_shortcode() {
		$bsc_admin_email = get_option('admin_email');
		return $bsc_admin_email;
	}
	add_shortcode( 'admin-email', 'bsc_admin_email_shortcode' );
?>
