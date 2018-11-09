<?php if ( is_home() ) { ?>
<div class="container-fluid page-header" <?php if ( get_field( 'page_header_image',get_option('page_for_posts') ) ): ?>style="background:url( <?php the_field('page_header_image',get_option('page_for_posts') ); ?>) no-repeat;background-size:cover;background-position:center center;"<?php endif; ?>>
<?php } else { ?>
<div class="container-fluid page-header" <?php if ( get_field( 'page_header_image' ) ): ?>style="background:url( <?php the_field('page_header_image'); ?>) no-repeat;background-size:cover;background-position:center center;"<?php endif; ?>>
<?php } ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php
					if ( is_home() ) { 
						echo 'Blog';
					/*} elseif ( is_404() ) { 
						echo '404 Not Found';*/
					} elseif ( is_post_type_archive() ) {
						echo post_type_archive_title();
					} elseif ( is_search() ) { 
						echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';

					} else {
						the_title();
					}
				?></h1>
			</div>
		</div>
	</div>
</div>

