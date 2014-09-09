<?php
/*
 * Template Name: About - Jobs
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="main-body l">
	<div class="l-main lc lc-single">
		<section class="section">
			<header class="section-header">
				<h2 class="section-title"><?php the_field('available_jobs_title'); ?></h2>
			</header>
			 <ul class="post-list">
			<?php
			// The Query
			query_posts( 'post_type=job' );
			
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			<li>
				<div class="block block-post">
					<div class="b-body">
						<p class="b-timestamp"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
						<h3 class="b-title"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
						<p class="b-excerpt"><?php the_field('summary'); ?></p>
					</div>
				</div>
			</li>		    
			   
			<?php 
			endwhile; 
			wp_reset_query();
			?>
			</ul><!--end post-list-->
		</section>
	</div><!--end l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>