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
<div class="lc">
	<div class="g g-3up">
		<?php
		// The Query
		query_posts( 'post_type=page&post_parent=5' );
		
		// The Loop
		while ( have_posts() ) : the_post(); ?>
		    <div class="gi">
				<div class="block block-thumb">
					<a href="<?php the_permalink(); ?>" class="b-inner">
						<div class="b-img">
							<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
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
</div><!--end .main-body-->
<?php get_footer(); ?>