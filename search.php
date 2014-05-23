<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<div class="l-main">
		<?php if ( have_posts() ) : ?>
		<div class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for “%s”', 'blankslate' ), get_search_query() ); ?></h1>
		</div><!--end .page-header-->
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('entry'); ?>
		<?php endwhile; ?>
		<?php get_template_part('nav', 'below'); ?>
		<?php else : ?>
		<article id="post-0" class="post no-results not-found">

		<h1><?php printf( __( 'No search results found for “%s”', 'blankslate' ), get_search_query() ); ?></h1>
		<p><?php _e( 'Please try again.', 'blankslate' ); ?></p>
		<?php get_search_form(); ?>

		</article>
		<?php endif; ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-3col-->
<?php get_footer(); ?>