<?php get_header(); ?>
<div class="page-header">
	<h1 class="page-title"><?php echo get_the_title(23); ?></h1>
	<p class="page-intro"><?php the_field('tagline', 23); ?></p>
</div>
<div class="main-body l">
	<div class="l-main">
		<div class="lc lc-single">
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
		</div><!--end .lc-->
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/sidebar-blog.php');  ?>
		<?php /* include (TEMPLATEPATH . '/includes/section-nav-categories.php'); */  ?>
	</div><!--end .l-sidebar-->
</div><!--end .main-body-->
<?php get_footer(); ?>