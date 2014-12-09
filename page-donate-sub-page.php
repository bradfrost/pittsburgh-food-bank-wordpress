<?php
/*
 * Template Name: Donate-Sub-Page
 */
?>

<?php include (TEMPLATEPATH . '/header-donate.php');  ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>	
</div>
<div class="lc lc-single">
	<div class="text">
		<?php the_content(); ?>
	</div>
	
</div><!--end lc-->
<?php endwhile; endif; ?>
<?php include (TEMPLATEPATH . '/footer-simple.php');  ?>