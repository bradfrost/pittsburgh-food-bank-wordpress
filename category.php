<?php get_header(); ?>
<div class="page-header">
	<h1 class="page-title"><?php single_cat_title(); ?></h1>
	<p class="page-intro">All posts categorized as "<?php single_cat_title(); ?>"</p>
</div>
<div class="main-body l">
	<div class="l-main">
		<div class="lc lc-single">
			<ul class="post-list">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<?php include (TEMPLATEPATH . '/includes/block-post.php');  ?>
			</li>
			<?php endwhile; endif; ?>
			</ul><!--end post-list-->
			<?php get_template_part('nav', 'below'); ?>
		</div><!--end .lc-->
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/sidebar-blog.php');  ?>
		<?php /* include (TEMPLATEPATH . '/includes/section-nav-categories.php'); */  ?>
	</div><!--end .l-sidebar-->
</div><!--end .main-body-->
<?php get_footer(); ?>