<?php
/*
 * Template Name: Donate
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>	
</div>
<div class="lc lc-single">
	<div class="donate donate-page">
		<?php include (TEMPLATEPATH . '/includes/donate-form.php');  ?>
	</div><!--end lc-->
</div><!--end lc-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>