<?php get_header(); ?>
<div class="banner banner-pattern kiwis"></div>
<div class="l-3col">
	<div class="l-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<p class="page-intro"><?php the_field('tagline'); ?></p>
		</div><!--end .page-header-->
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php the_content(); ?>
		<?php if ( ! post_password_required() ) comments_template('', true); ?>
		<?php endwhile; endif; ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		Section navigation
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-3col-->
<?php get_footer(); ?>