<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<div class="l-main">
		<div class="page-header">
			<h1 class="page-title"><?php echo get_the_title(23); ?></h1>
			<p class="page-intro"><?php the_field('tagline', 23); ?></p>
		</div>
		<ul class="post-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<div class="block block-post">
				<div class="b-body">
					<p class="b-timestamp"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
					<h3 class="b-title"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
					<p class="b-excerpt"><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</li>
		<?php endwhile; endif; ?>
		</ul><!--end post-list-->
		<?php get_template_part('nav', 'below'); ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		
		
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-3col-->
<?php get_footer(); ?>