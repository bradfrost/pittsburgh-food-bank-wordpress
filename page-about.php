<?php
/*
 * Template Name: About
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body">

	<section class="section section-block">
		<div class="lc">
			<div class="section-img">
				<?php $image = get_field('landing_image'); ?>
				<img src="<?php echo $image['url'] ?>" alt="">
			</div>
			<div class="section-body">
				<h2><?php the_field('mission_statement_title'); ?></h2>
				<p class="intro">
					<?php the_field('mission_statement'); ?>
				</p>
				
				<h2><?php the_field('vision_title'); ?></h2>
				<p class="intro">
					<?php the_field('vision'); ?>
				</p>
			</div>
		</div>
	</section>

	<section class="section section-alt">
		<header class="section-header">
			<h2 class="section-title"><?php the_field('sub_title'); ?></h2>
			<p class="section-desc"><?php the_field('sub_description'); ?></p>
		</header>
		<div class="lc">
			<div class="g g-3up">
			<?php
			// The Query
			query_posts( 'post_type=page&post_parent=9&orderby=menu_order&order=ASC' );
			
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			    <div class="gi">
					<div class="block block-thumb">
						<a href="<?php the_permalink(); ?>" class="b-inner">
							<div class="b-img">
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('square');
									} else {
										echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) .'/images/fpo_square.png" />';
									}
								?>
								
							</div>
							<div class="b-text">
								<h2 class="b-title"><?php the_title(); ?></h2>
								<p class="b-excerpt"><?php the_field('tagline'); ?></p>
							</div>
						</a>
					</div>
				</div><!--end .gi-->
			<?php 
			endwhile; 
			wp_reset_query();
			?>
			
			</div><!--end .g-3up-->
		</div>
	</section>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>