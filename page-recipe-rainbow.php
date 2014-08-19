<?php
/*
 * Template Name: Recipe Rainbow
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="main-body lc">
	Recipe Rainbow widget
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>