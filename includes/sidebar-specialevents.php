<aside id="sidebar" role="complementary">
	<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
	<ul class="sidebar-widgets">
		<li id="nav_menu-2" class="widget widget_nav_menu">
			<h2 class="widgettitle"><a href="/events/special-events">Special Events</a></h2>
			<ul class="text-list">
				<?php
				$specialevents = get_pages( array( 'child_of' => 818 ) );
				foreach( $specialevents as $page ) { ?>
					<?php 
						$nospaces = str_replace(' ', '-', $page->post_title);
						$path = strtolower($nospaces);
					?>
					<li><a href="/events/special-events#<?php echo $path; ?>"><?php echo $page->post_title; ?></a></li>
				<?php }	?>
			</ul>
		</li>
		<?php dynamic_sidebar('specialevents'); ?>
	</ul>
	<?php endif; ?>
</aside>