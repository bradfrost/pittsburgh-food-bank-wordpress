<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="l-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('entry'); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part('nav', 'below'); ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<nav class="vertical-nav section-nav">
		<?php 
			if ( is_page() && $post->post_parent > 0 ) { 
			    echo '<h3 class="section-nav-title"><a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'</h3></a>';
			}
			
			echo '<ul class="section-nav-list">';
			$parent = $post->post_parent;
			$args = array(
				'child_of'     => $parent,
				'title_li'     => '',
				'depth'        => 1
			);
			

			wp_list_pages( $args );
			echo '</ul>';
		?>
		</nav><!--end .section-nav-->
		
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
	<?php endwhile; endif; ?>
</div><!--end .l-3col-->
<?php get_footer(); ?>