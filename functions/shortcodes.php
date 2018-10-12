<?php 
	// Admin Email
	function bsc_admin_email_shortcode() {
		$bsc_admin_email = get_option('admin_email');
		return '<a href="mailto:'.$bsc_admin_email.'">'.$bsc_admin_email.'</a>';
	}
	add_shortcode( 'admin-email', 'bsc_admin_email_shortcode' );
?>
