<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-header">
		<h1 class="page-title"><?php echo get_the_title(); ?></h1>
		<p class="page-intro">Job opening posted <?php echo get_the_date(); ?></p>
	</div>
	<div class="main-body l">
		<div class="l-main lc lc-single">
			<div class="text">
				<?php the_field('summary'); ?>
				
				<h2>Job Responsibilities</h2>
				<?php the_field('responsibilities'); ?>
				
				<h2>Job Requirements</h2>
				<?php the_field('requirements'); ?>
			</div><!--end text-->
		</div><!--end l-main-->
	<?php endwhile; endif; ?>
		<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
		<div class="l-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div><!--end main-body-->
<?php get_footer(); ?>