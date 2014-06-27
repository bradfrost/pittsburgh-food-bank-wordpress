<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">

<div class="page-header">
	<?php the_title( '<h1 class="page-title tribe-events-single-event-title summary">', '</h1>' ); ?>
	<?php echo tribe_events_event_schedule_details( $event_id, '<p class="page-intro">', '</p>'); ?>
</div><!--end page-header-->

<div class="main-body l">
	
	<div class="l-main">
		
		<!-- Notices -->
		<?php tribe_events_the_notices() ?>
	
		<div class="tribe-events-schedule updated published tribe-clearfix">
			
			<?php  if ( tribe_get_cost() ) :  ?>
				<span class="tribe-events-divider">|</span>
				<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
			<?php endif; ?>
		</div>
	
		<?php while ( have_posts() ) :  the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('vevent'); ?>>
				<!-- Event featured image -->
				<?php echo tribe_event_featured_image(); ?>
	
				<!-- Event content -->
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<div class="tribe-events-single-event-description tribe-events-content entry-content text">
					<?php the_content(); ?>
				</div><!-- .tribe-events-single-event-description -->
				<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
	
				<!-- Event meta -->
				<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
					<?php echo tribe_events_single_event_meta() ?>
	
				<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
				</div><!-- .hentry .vevent -->
			<?php if( get_post_type() == TribeEvents::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
		<?php endwhile; ?>
		
		<p><a href="<?php echo tribe_get_events_link() ?>" class="btn btn-small"> <?php _e( 'View All Events', 'tribe-events-calendar' ) ?></a></p>
		<hr />
		<?php include (TEMPLATEPATH . '/includes/well-newsletter.php');  ?>
	</div><!--end l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/sidebar-specialevents.php');  ?>
	</div><!--end .l-sidebar-->
</div><!--end main-body-->

</div><!-- #tribe-events-content -->
