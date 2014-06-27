<?php
/*
 * Template Name: Sitemap
 */
?>

<?php get_header(); ?>
<div class="main-body">
	<div class="lc text">
		<ul>
		<?php wp_list_pages( $args ); ?>
		</ul>
	</div>
</div><!--end main-body-->
<?php get_footer(); ?>