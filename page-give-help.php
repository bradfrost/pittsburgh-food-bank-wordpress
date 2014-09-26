<?php
/*
 * Template Name: Give Help
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="lc">
	<div class="hero hero-main section">
			<div class="hero-img">
				<a href="<?php the_field('volunteer_url'); ?>">
					<?php 
						$image = get_field('volunteer_image'); 
						$imageURL = $image['url'];
					?>
					<img src="<?php echo $imageURL ?>" alt="">
				</a>
			</div>
			<div class="hero-body">
				<h2 class="hero-title"><a href="<?php the_field('volunteer_url'); ?>"><?php the_field('volunteer_title'); ?></a></h2>
				<p class="hero-description"><?php the_field('volunteer_desc'); ?></p>
				<a href="<?php the_field('volunteer_url'); ?>" class="btn"><?php the_field('volunteer_cta'); ?></a>
			</div>
		</div>
	</div><!--end lc-->
	<section class="section section-full section-alt">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('give_help_resources_title'); ?></h2>
		</header>
		<div class="lc">
			<div class="g g-3up">
				<?php
	
				// check if the repeater field has rows of data
				if( have_rows('give_help_resources') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('give_help_resources') ) : the_row(); ?>        
				        <div class="gi">
							<div class="block block-thumb">
								<a href="<?php the_sub_field('give_help_resource_link'); ?>" class="b-inner">
									<div class="b-img">
										<?php 
											$image = get_sub_field('give_help_resource_img');
											$imageURL = $image['url'];
											$imageCrop = aq_resize($imageURL,250, 250, true);
											if ( $image ) {
				
												echo '<img src="' . $imageCrop .'" alt="" />';
												
											} else {
											
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
											}
										?>
										
									</div>
									<div class="b-text">
										<h2 class="b-title"><?php the_sub_field('give_help_resource_title'); ?></h2>
										<p class="b-excerpt"><?php the_sub_field('give_help_resource_desc'); ?></p>
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
	</section>
</div><!--end main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>