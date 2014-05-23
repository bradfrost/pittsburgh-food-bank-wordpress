<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="l-main">
		<div class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<p class="page-intro"><?php the_field('tagline'); ?></p>
		</div><!--end .page-header-->
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<div class="text">
		<?php the_content(); ?>
		</div>
		<?php if ( ! post_password_required() ) comments_template('', true); ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
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
				echo '<h3 class="section-nav-title"><a href="'.get_permalink($post->post_parent).'">'.get_the_title($parent).'</h3></a>';
				
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
		
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
	<?php endwhile; endif; ?>
</div><!--end .l-3col-->
<?php get_footer(); ?>