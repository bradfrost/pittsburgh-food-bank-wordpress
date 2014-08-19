<?php
/*
 * Template Name: About - Staff
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body">
	<section class="section">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('executive_staff_title'); ?></h2>
		</header>
		<div class="lc">
			<div class="g g-3up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('executive_staff') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('executive_staff') ) : the_row(); ?> 
					    	<?php $image = get_sub_field('image'); ?>      
					        <div class="gi">
								<div class="block block-thumb">
									
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
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
		</div>
	</section>
	
	<section class="section section-alt">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('board_title'); ?></h2>
		</header>
		<div class="lc">
			<div class="g g-3up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('board_member') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('board_member') ) : the_row(); ?>
					    <div class="gi">    
					        <div class="block block-text">
								<h2 class="b-title"><?php the_sub_field('name'); ?></h2>
								<p class="b-excerpt"><?php the_sub_field('organization'); ?></p>
							</div>
					    </div>
				<?php 
				    endwhile;
				    endif;
				?>
			</div><!--end .g-3up-->
		</div>
	</section>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>