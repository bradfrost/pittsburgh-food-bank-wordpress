<?php
/**
 * Month View Template
 * The wrapper template for month view. 
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<div class="page-header">
	<h1 class="page-title">Events</h1>
	<p class="page-intro"><?php the_field('tagline', 21); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main">

		<?php do_action( 'tribe_events_before_template' ) ?>
		
		<!-- Tribe Bar -->
		<?php tribe_get_template_part( 'modules/bar' ); ?>
		
		<!-- Main Events Content -->
		<?php tribe_get_template_part('month/content'); ?>
		
		<?php do_action( 'tribe_events_after_template' ) ?>

	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/sidebar-specialevents.php');  ?>
	</div><!--end .l-sidebar-->
</div><!--end main-body-->
