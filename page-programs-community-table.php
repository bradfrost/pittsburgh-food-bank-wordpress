<?php
/*
 * Template Name: Community Table
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="l">
	<div class="l-main">
		<div class="lc lc-single">
			<div class="text">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
	<section class="section">
		<div class="lc">
			<header class="section-header">
				<h2 class="section-title"><?php the_field('donor_section_title'); ?></h2>
			</header>
			
			<div class="g g-4up">
				<?php
	
				// check if the repeater field has rows of data
				if( have_rows('ct_donor') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('ct_donor') ) : the_row(); ?>        
				        <div class="gi">
							<div class="block block-thumb">
								<a href="<?php the_sub_field('donor_url'); ?>" class="b-inner">
									<div class="b-img">
										<?php 
											$image = get_sub_field('donor_image');
											if ( $image ) {
				
												echo '<img src="' . $image["url"] .'" alt="" />';
												
											} else {
											
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
											}
										?>
										
									</div>
									<div class="b-text">
										<h2 class="b-title"><?php the_sub_field('donor_name'); ?></h2>
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
	</section>
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>

	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>