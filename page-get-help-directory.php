<?php
/*
 * Template Name: Get Help - Food Assistance Directory
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<form action="#" method="post" class="inline-form find-help">           
		<fieldset>
		    <legend>Find food near you</legend>
		    <label for="help-field" class="is-vishidden">Email address</label>
		    <div class="inline-container">
		   		<input type="newsletter" placeholder="Enter your neighborhood or zip code" id="help-field" class="help-field">
		    	<button class="newsletter-submit">Search</button>
			</div>
		</fieldset>
	</form>
</div>
<div class="lc">
	Get Help Directory Results
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>