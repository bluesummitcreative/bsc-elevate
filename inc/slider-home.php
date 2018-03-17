<?php if( get_field('slider') ): ?>
<div class="slider">
	 <?php echo do_shortcode(the_field('slider')); ?>
</div>
<?php endif; ?>
