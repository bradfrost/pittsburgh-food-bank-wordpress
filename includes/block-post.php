<div class="block block-post">
	<div class="b-body">
		<a href="<?php echo get_permalink(); ?>" class="b-timestamp">
			<span class="b-timestamp-month"><?php echo get_the_date('M'); ?></span>
			<span class="b-timestamp-day"><?php echo get_the_date('d'); ?></span>
			<span class="b-timestamp-year"><?php echo get_the_date('Y'); ?></span>	
		</a>
		<h3 class="b-title"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
		<p class="b-excerpt"><?php echo get_the_excerpt(); ?></p>
	</div>
</div>