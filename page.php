<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main lc lc-single">
		<div class="text">
		<?php the_content(); ?>
		</div>
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>