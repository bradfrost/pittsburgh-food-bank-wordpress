<aside id="sidebar" role="complementary">
	<?php 
		echo $customCat;
		if($customCat == 34 || !$customCat) { //If Category is set to 'All'
			$archive_query = new WP_Query('showposts=5');
			$catName = "";
		} else {
			$archive_query = new WP_Query('cat='.$customCat.',showposts=5');
			$catName = get_cat_name( $customCat ); 
		}
	 ?>

	<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
	<ul class="sidebar-widgets">
	
		<li id="recent-posts-2" class="widget widget_recent_entries">
			<h3 class="widgettitle">Recent <?php echo $catName ?> Posts</h3>		
			<ul class="sidebar-block-list">
				<?php while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<span class="post-date"><?php the_time(); ?></span>
				</li>
				<?php endwhile; ?>
			</ul>
			<a href="/blog" class="text-btn">Read our blog</a>
		</li>
	
	
	<?php dynamic_sidebar('primary-widget-area'); ?>
	</ul>
	<?php endif; ?>
</aside>