<?php
/*
 * Template Name: Sitemap
 */
?>

<?php get_header(); ?>
	<div class="lc text">
		<ul>
		<?php wp_list_pages( $args ); ?>
		</ul>
	</div>
<?php get_footer(); ?>