<nav class="vertical-nav section-nav">
	<h3 class="section-nav-title">Categories</h3>
	<ul class="section-nav-list">
		<?php 
			$args = array(
				'title_li'           => "",
			);
			wp_list_categories($args); 
		?>
	</ul>
</nav><!--end .section-nav-->