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
					<div class="block block-post">
						<div class="b-body">
							<p class="b-timestamp"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
							<h3 class="b-title"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
							<p class="b-excerpt"><?php echo get_the_excerpt(); ?></p>
						</div>
					</div>
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
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div><!--end .l-sidebar-->
</div><!--end .main-body-->

<?php get_footer(); ?>