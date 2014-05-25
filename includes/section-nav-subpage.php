<nav class="vertical-nav section-nav">
<?php 
	if ($post->post_parent)	{
		$ancestors=get_post_ancestors($post->ID);
		$root=count($ancestors)-1;
		$parent = $ancestors[$root];
	} else {
		$parent = $post->ID;
	}
	
	if ($parent == 5 || $parent == 9 || $parent == 19) {
		echo '<h3 class="section-nav-title"><a href="'.get_permalink($post->post_parent).'">'.get_the_title($parent).'</a></h3>';
		
		echo '<ul class="section-nav-list">';
		$args = array(
			'child_of'     => $parent,
			'title_li'     => '',
			'depth'        => 1
		);
		

		wp_list_pages( $args );
		echo '</ul>';
	}

	
	
	
	
	
?>
</nav><!--end .section-nav-->