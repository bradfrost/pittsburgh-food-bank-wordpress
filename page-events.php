<?php
/*
 * Template Name: Events
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main lc">
		<ul class="post-list event-list">		
			<?php
				global $post;
				$all_events = tribe_get_events(array(
				'eventDisplay'=>'upcoming',
				'posts_per_page'=>-1
				));
				
				foreach($all_events as $post) {
				setup_postdata($post);
				?>
				
				<li>
					<div class="block block-event">
						<div class="b-body">
							<p class="b-timestamp">
								<a href="#">
								<?php 
									if(tribe_is_multiday()) {
										echo tribe_get_start_date($post->ID, true, 'M j')."-".tribe_get_end_date($post->ID, true, 'j, Y');
									} else {
										echo tribe_get_start_date($post->ID, true, 'M j, Y');
									}
								?>
								</a>
							</p>
							<h3 class="b-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="b-byline">2515 Versailles Ave, McKeesport, PA 15132</p>
							<p class="b-excerpt"><?php the_excerpt(); ?></p>
						</div>
					</div>
				</li>
				<?php } //endforeach ?>
				<?php wp_reset_query(); ?>
		</ul><!--end event-list-->
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/sidebar-specialevents.php');  ?>
	</div><!--end .l-sidebar-->
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>