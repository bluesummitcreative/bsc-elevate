<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			
			<?php 
				if ( is_page_template('full-width.php') || is_front_page() ) {
					echo '<div class="col-sm-12">';
				} else {
					echo '<div class="col-sm-9 order-sm-2">';
				}

					if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile; endif; 

				echo '</div>';
				
				if (! is_page_template('full-width.php') || is_front_page() ) {
						get_sidebar();
					}
			?>

		</div>
	</div>
</div>
