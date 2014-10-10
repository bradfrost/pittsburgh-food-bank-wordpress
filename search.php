<?php get_header(); ?>

<div class="page-header">
	<h1 class="page-title"><?php printf( __( 'Search Results for “%s”', 'blankslate' ), get_search_query() ); ?></h1>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main">
		<div class="lc lc-single">
			
			<?php 
				global $query_string;
				query_posts( $query_string . '&post_type=page' );
				if ( have_posts() ) : 
			?>
			
			<h2>Pages</h2>
			<ul class="post-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<?php include (TEMPLATEPATH . '/includes/block-page.php');  ?>
				</li>
			<?php endwhile; ?>
			</ul><!--end post-list-->
			<?php endif; wp_reset_query(); ?>
		
			<ul class="post-list">
			<?php 
				global $query_string;
				query_posts( $query_string .'&post_type=post' );
				if ( have_posts() ) : 
			?>
			<h2>Posts</h2>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<?php include (TEMPLATEPATH . '/includes/block-post.php');  ?>
				</li>
			<?php endwhile; ?>
			</ul><!--end post-list-->
			<?php get_template_part('nav', 'below'); ?>
			<?php endif; ?>
		</div>
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div><!--end .l-sidebar-->
</div><!--end .main-body-->

<?php get_footer(); ?>