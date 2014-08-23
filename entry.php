<div id="post-<?php the_ID(); ?>" class="block block-post">
	<div class="b-body">
		<p class="b-timestamp"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
		<h3 class="b-title"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
		<p class="b-excerpt"><?php echo get_the_excerpt(); ?></p>
	</div>
</div>