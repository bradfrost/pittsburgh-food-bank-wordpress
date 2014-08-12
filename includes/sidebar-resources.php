<aside id="sidebar" role="complementary">
	<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
	<ul class="sidebar-widgets">
		<?php dynamic_sidebar('resources'); ?>
	</ul>
	<?php endif; ?>
</aside>