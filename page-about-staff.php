<?php
/*
 * Template Name: About - Staff
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body">
	
	<h2><?php the_field('executive_staff_title'); ?></h2>
	<div class="g g-3up section">
		<?php
 
			// check if the repeater field has rows of data
			if( have_rows('executive_staff') ):
			 
			 	// loop through the rows of data
			    while ( have_rows('executive_staff') ) : the_row(); ?>        
			        <div class="gi">
						<div class="block block-thumb">
							
							<div class="b-img">
								<img src="<?php the_sub_field('image'); ?>" alt="Thumb" />
							</div>
							<div class="b-text">
								<h2 class="b-title"><?php the_sub_field('name'); ?></h2>
								<p class="b-excerpt"><?php the_sub_field('title'); ?></p>
							</div>

						</div>
					</div>
		<?php 
		    endwhile;
		    endif;
		?>
	</div><!--end .g-3up-->
	
	<hr />
	
	<h2><?php the_field('board_title'); ?></h2>
	<h2><?php the_field('executive_staff_title'); ?></h2>
	<div class="g g-3up section">
		<?php
 
			// check if the repeater field has rows of data
			if( have_rows('campaigns') ):
			 
			 	// loop through the rows of data
			    while ( have_rows('campaigns') ) : the_row(); ?>        
			        <div class="gi">
						<div class="block block-thumb">
							<a href="<?php the_sub_field('campaign_url'); ?>" class="b-inner">
								<div class="b-img">
									<img src="<?php the_sub_field('campaign_image'); ?>" alt="Thumb" />
								</div>
								<div class="b-text">
									<h2 class="b-title"><?php the_sub_field('campaign_title'); ?></h2>
									<p class="b-excerpt"><?php the_sub_field('campaign_description'); ?></p>
								</div>
							</a>
						</div>
					</div>
		<?php 
		    endwhile;
		    endif;
		?>
	</div><!--end .g-3up-->
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>