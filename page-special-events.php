<?php
/*
 * Template Name: Special Events
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="lc lc-single">
		<div class="text">
		<?php the_content(); ?>
		</div>
		
		<ul class="post-list">
			<?php
		 
				// check if the repeater field has rows of data
				if( have_rows('special_events_list') ):
				
					$path = "path";
				 
				 	// loop through the rows of data
				    while ( have_rows('special_events_list') ) : the_row(); ?>     
				        <li id="<?php echo $path; ?>">
							<h2><a href="#<?php echo $path; ?>"><?php the_sub_field('special_event_title'); ?></a></h2>
							<div><?php the_sub_field('special_event_description'); ?></div>
						</li>
			<?php 
			    endwhile;
			    endif;
			?>
		</ul><!--end post-list-->
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div><!--end .l-sidebar-->
	<?php endwhile; endif; ?>
</div><!--end .main-body-->
<?php get_footer(); ?>