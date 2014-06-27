<?php
/*
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="banner banner-hero">
	<div class="lc">
		<h2 class="banner-hero-text"><?php the_field('tagline'); ?></h2>
	</div>
</div><!--end .banner-hero-->
<div class="main-body">
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
	
	<div class="split section">

		<div class="g g-2up">
			<div class="gi split-col-1">
				<div class="split-inner">
					<h2 class="section-title">Get Help</h2>
					<p><?php the_field('get_help_description'); ?></p>
					<ul class="text-list">
					<?php
 
					// check if the repeater field has rows of data
					if( have_rows('get_help_links') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('get_help_links') ) : the_row(); ?>        
					        <li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
					<?php 
					    endwhile;
					    endif;
					?>
					</ul>
				</div>
			</div>
			<div class="gi split-col-2">
				<div class="split-inner">
					<h2 class="section-title">Give Help</h2>
					<p><?php the_field('give_help_description'); ?></p>
					<ul class="text-list">
						<?php
 
						// check if the repeater field has rows of data
						if( have_rows('give_help_links') ):
						 
						 	// loop through the rows of data
						    while ( have_rows('give_help_links') ) : the_row(); ?>        
						        <li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
						<?php 
						    endwhile;
						    endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="section section-block">
		<div class="section-img">
			<?php 
			$attachment_id = get_field('about_image');
			$size = "med-large";
			$image = wp_get_attachment_image_src( $attachment_id, $size );
			// url = $image[0];
			// width = $image[1];
			// height = $image[2];
			?>
			
			<img src="<?php echo $image[0]; ?>" alt="" />
		</div>
		<div class="section-body">
			<h2 class="section-title"><?php the_field('about_title'); ?></h2>
			<p class="section-desc"><?php the_field('about_description'); ?></p>
			<ul class="text-list">
				<?php
 
				// check if the repeater field has rows of data
				if( have_rows('about_links') ):
				 
				 	// loop through the rows of data
				    while ( have_rows('about_links') ) : the_row(); ?>        
				        <li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
				<?php 
				    endwhile;
				    endif;
				?>
			</ul>
		</div>
	</section>
	
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>