<?php if( get_field('intro_right_content') ): ?>
<div class="container-fluid container-padding intro">
	<div class="container">
		<div class="row">
			<?php if ( get_field( 'intro_left_content' ) ): ?>
			<div class="col-sm-5">
				<?php the_field('intro_left_content'); ?>
			</div>
			<div class="col-sm-7">
			<?php else: // field_name returned false ?>
			<div class="col-sm-12">
			<?php endif; // end of if field_name logic ?>
				<?php the_field('intro_right_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>