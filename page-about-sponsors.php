<?php
/*
 * Template Name: About - Sponsors
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body">
	<div class="lc lc-single">
		<div class="text">
			<?php the_content(); ?>
		</div>
	</div>
	
	<section class="section">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('sponsor_title'); ?></h2>
			<p class="section-desc"><?php the_field('sponsor_subtitle'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-3up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('sponsor_company') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('sponsor_company') ) : the_row(); ?>
					    <?php $image = get_sub_field('sponsor_logo'); ?>      
					    <div class="gi">
					        
					        <div class="block block-thumb">
								<a href="<?php the_sub_field('sponsor_link'); ?>" class="b-inner" title="<?php the_sub_field('sponsor_name'); ?>">
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('sponsor_name'); ?>" />
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
	
	<!--Tier 2-->
	<section class="section section-alt">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('tier_2_title'); ?></h2>
			<p class="section-desc"><?php the_field('tier_2_subtitle'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-4up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('tier_2_company') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('tier_2_company') ) : the_row(); ?>
					    <?php $image = get_sub_field('sponsor_logo'); ?>      
					    <div class="gi">
					        
					        <div class="block block-thumb">
								<a href="<?php the_sub_field('sponsor_link'); ?>" class="b-inner" title="<?php the_sub_field('sponsor_name'); ?>">
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('sponsor_name'); ?>" />
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
	
	<!--Tier 3-->
	<section class="section">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('tier_3_title'); ?></h2>
			<p class="section-desc"><?php the_field('tier_3_subtitle'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-4up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('tier_3_company') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('tier_3_company') ) : the_row(); ?>
					    <?php $image = get_sub_field('sponsor_logo'); ?>      
					    <div class="gi">
					        
					        <div class="block block-thumb">
								<a href="<?php the_sub_field('sponsor_link'); ?>" class="b-inner" title="<?php the_sub_field('sponsor_name'); ?>">
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('sponsor_name'); ?>" />
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
	
	<!--Tier 4-->
	<section class="section section-alt">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('tier_4_title'); ?></h2>
			<p class="section-desc"><?php the_field('tier_4_subtitle'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-4up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('tier_4_company') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('tier_4_company') ) : the_row(); ?>
					    <?php $image = get_sub_field('sponsor_logo'); ?>      
					    <div class="gi">
					        
					        <div class="block block-thumb">
								<a href="<?php the_sub_field('sponsor_link'); ?>" class="b-inner" title="<?php the_sub_field('sponsor_name'); ?>">
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('sponsor_name'); ?>" />
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
	
	<!--Tier 5-->
	<section class="section">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('tier_5_title'); ?></h2>
			<p class="section-desc"><?php the_field('tier_5_subtitle'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-4up">
				<?php
		 
					// check if the repeater field has rows of data
					if( have_rows('tier_5_company') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('tier_5_company') ) : the_row(); ?>
					    <?php $image = get_sub_field('sponsor_logo'); ?>      
					    <div class="gi">
					        
					        <div class="block block-thumb">
								<a href="<?php the_sub_field('sponsor_link'); ?>" class="b-inner" title="<?php the_sub_field('sponsor_name'); ?>">
									<div class="b-img">
										<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('sponsor_name'); ?>" />
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
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>