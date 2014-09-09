<?php get_header(); ?>

<div class="page-header">
	<h1 class="page-title"><?php printf( __( 'Search Results for “%s”', 'blankslate' ), get_search_query() ); ?></h1>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main">
		<div class="lc lc-single">
			<ul class="post-list">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<?php include (TEMPLATEPATH . '/includes/block-post.php');  ?>
				</li>
			<?php endwhile; ?>
			</ul><!--end post-list-->
			<?php get_template_part('nav', 'below'); ?>
			<?php else : ?>
			<article id="post-0" class="post no-results not-found">
	
			<h1><?php printf( __( 'No search results found for “%s”', 'blankslate' ), get_search_query() ); ?></h1>
			<p><?php _e( 'Please try again.', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
	
			</article>
			<?php endif; ?>
		</div>
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div><!--end .l-sidebar-->
</div><!--end .main-body-->

<?php get_footer(); ?>