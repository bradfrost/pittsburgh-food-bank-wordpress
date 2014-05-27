<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<div class="l-main">
		<div class="page-header">
			<h1 class="page-title">Page Not Found</h1>
			<p class="page-intro">The page you were looking for unfortunately isn't here.</p>
		</div><!--end .page-header-->
		
		<div class="text">
			<a href="/">Return to the homepage</a>
		</div>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php include (TEMPLATEPATH . '/includes/section-nav-subpage.php');  ?>
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-3col-->
<?php get_footer(); ?>