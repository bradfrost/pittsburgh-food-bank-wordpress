<?php
/*
 * Template Name: Resources - FAQ 
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="main-body l">
	<div class="lc lc-single">
		FAQ content goes here
	</div>
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>