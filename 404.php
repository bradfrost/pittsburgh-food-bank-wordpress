<?php get_header(); ?>
<div class="main-body l">
	<div class="l-main">
		<div class="page-header">
			<h1 class="page-title">Page Not Found</h1>
			<p class="page-intro">The page you were looking for unfortunately isn't here.</p>
		</div><!--end .page-header-->
		<div class="lc lc-single">
			<div class="text">
				<a href="/">Return to the homepage</a>
			</div>
		</div>
	</div><!--end .l-main-->
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .l-->
<?php get_footer(); ?>