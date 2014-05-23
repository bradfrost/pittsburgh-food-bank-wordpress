<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<div class="l-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="page-header">
			<h1 class="page-title"><?php echo get_the_title(); ?></h1>
			<p class="page-intro">Posted <?php echo get_the_date(); ?> by <?php echo get_the_author(); ?></p>
		</div>
		<div class="text">
			<?php the_content(); ?>
		</div><!--end text-->
		<?php endwhile; endif; ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/section-nav-categories.php');  ?>
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-3col-->

<?php get_footer(); ?>