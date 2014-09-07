<?php
/*
 * Template Name: Get Help
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
	<a href="/get-help/directory" class="btn">Find food near you</a>
	
</div>
<div class="main-body l">
	<div class="banner banner-cta">
		<div class="lc">
			<p class="banner-text"><?php the_field('emergency_food_instruction'); ?></p>
			<a href="tel:+4123250749" class="text-btn"><?php the_field('emergency_food_number'); ?></a>
		</div>
	</div>
	<section class="section section-full">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('get_help_resources_title'); ?></h2>
		</header>
		<div class="lc">
			<div class="g g-3up">
				<?php
	
				// check if the repeater field has rows of data
				if( have_rows('get_help_resources') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('get_help_resources') ) : the_row(); ?>        
				        <div class="gi">
							<div class="block block-thumb">
								<a href="<?php the_sub_field('get_help_resource_link'); ?>" class="b-inner">
									<div class="b-img">
										<?php 
											$image = get_sub_field('get_help_repeater_img');
											if ( $image ) {
				
												echo '<img src="' . get_sub_field('get_help_repeater_img') .'" alt="Thumb" />';
												
											} else {
											
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
											}
										?>
									</div>
									<div class="b-text">
										<h2 class="b-title"><?php the_sub_field('get_help_resource_title'); ?></h2>
										<p class="b-excerpt"><?php the_sub_field('get_help_resource_desc'); ?></p>
									</div>
								</a>
							</div>
						</div>
			<?php 
			    endwhile;
			    endif;
			?>		
			</div><!--end .g-3up-->
		</div><!--end .lc-->
		<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	</section>
</div><!--end main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>