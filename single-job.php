<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-header">
		<h1 class="page-title"><?php echo get_the_title(); ?></h1>
		<p class="page-intro">Posted <?php echo get_the_date(); ?></p>
	</div>
	<div class="main-body l">
		<div class="l-main">
			<div class="text">
				<?php the_field('summary'); ?>
				
				<h2>Job Responsibilities</h2>
				<?php the_field('responsibilities'); ?>
				
				<h2>Job Requirements</h2>
				<?php the_field('requirements'); ?>
			</div><!--end text-->
			<div class="fpo">Contact well</div>
		</div><!--end l-main-->
	<?php endwhile; endif; ?>
		<div class="l-sidebar">
			<?php include (TEMPLATEPATH . '/includes/sidebar-resources.php');  ?>
		</div><!--end l-sidebar-->
	</div><!--end main-body-->
<?php get_footer(); ?>