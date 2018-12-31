	<footer class="footer">
		<div class="container-fluid footer-widgets">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer' ) ) : 
						dynamic_sidebar( 'footer' );
					endif; ?>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="copyright">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a> | <a href="/privacy-policy/">Privacy Policy</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>
