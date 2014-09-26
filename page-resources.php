<?php
/*
 * Template Name: Resources
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="main-body lc">
	<section class="section l">
		<div class="g g-3up">
				<?php
	
				// check if the repeater field has rows of data
				if( have_rows('resource_list') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('resource_list') ) : the_row(); ?>        
				        <div class="gi">
							<div class="block block-thumb">
								<a href="<?php the_sub_field('resource_link'); ?>" class="b-inner">
									<div class="b-img">
										<?php 
											$image = get_sub_field('resource_img');
											if ( $image ) {
				
												echo '<img src="' . $image["url"] .'" alt="" />';
												
											} else {
											
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
											}
										?>
										
									</div>
									<div class="b-text">
										<h2 class="b-title"><?php the_sub_field('resource_title'); ?></h2>
										<p class="b-excerpt"><?php the_sub_field('resource_desc'); ?></p>
									</div>
								</a>
							</div>
						</div>
			<?php 
			    endwhile;
			    endif;
			?>		
			</div><!--end .g-3up-->
	</section>
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>