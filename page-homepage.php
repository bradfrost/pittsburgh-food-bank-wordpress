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
<div class="lc">
	<div class="g g-1to3up section-homepage-touts">
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
	</div><!--end .g-1to3up-->
</div><!--end .lc-->

<section class="section section-shade-2">
	<div class="lc">
		<div class="icon-grocery-bag"></div>
		<p class="section-intro"><?php the_field('get_give_help_description'); ?></p>
		
		<div class="list-section list-section-get-help">
			<h2 class="list-section-title">Get Help</h2>
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
		
		<div class="list-section list-section-give-help">
			<h2 class="list-section-title">Give Help</h2>
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
</section>

<section class="section section-shade">
	<div class="lc">
		<div class="icon-plate"></div>
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
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>