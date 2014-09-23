<?php
/*
 * Template Name: Programs
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<?php endwhile; endif; ?>
<div class="lc lc-single">
	<div class="text">
		<?php the_field('program_intro'); ?>
	</div>
</div>
<div class="lc">
	<div class="g g-3up">
		<?php
	
				// check if the repeater field has rows of data
				if( have_rows('program') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('program') ) : the_row(); ?>        
				        <div class="gi">
							<div class="block block-thumb">
								<a href="<?php the_sub_field('program_link'); ?>" class="b-inner">
									<div class="b-img">
										<?php 
											$image = get_sub_field('program_image');
											$imageURL = $image['url'];
											$imageCrop = aq_resize($imageURL,250, 250, true);
											if ( $image ) {
				
												echo '<img src="' . $imageCrop .'" alt="Thumb" />';
												
											} else {
											
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
											}
										?>
										
									</div>
									<div class="b-text">
										<h2 class="b-title"><?php the_sub_field('program_title'); ?></h2>
										<p class="b-excerpt"><?php the_sub_field('program_desc'); ?></p>
									</div>
								</a>
							</div>
						</div>
			<?php 
			    endwhile;
			    endif;
			?>
	</div><!--end .g-3up-->
</div><!--end .main-body-->
<?php get_footer(); ?>