<?php if( get_field('slider') ): ?>
<div class="slider">
	 <?php echo do_shortcode(get_field('slider', false, false)); ?>
</div>
<?php endif; ?>
