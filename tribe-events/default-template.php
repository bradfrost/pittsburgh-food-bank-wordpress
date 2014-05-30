<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template' 
 * is selected in Events -> Settings -> Template -> Events Template.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

get_header(); ?>


<div class="banner banner-pattern"></div>
<div class="l-3col">
	
	<div class="l-main">
		<?php tribe_events_before_html(); ?>
		<?php tribe_get_view(); ?>
		<?php tribe_events_after_html(); ?>
		
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
				
				
				<?php } //endforeach ?>
				<?php wp_reset_query(); ?>
		</ul><!--end event-list-->
		
		<?php include (TEMPLATEPATH . '/includes/well-newsletter.php');  ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/section-nav-subpage.php');  ?>
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php include (TEMPLATEPATH . '/includes/sidebar-specialevents.php');  ?>
	</div>
</div><!--end .l-3col-->
<?php get_footer(); ?>