<?php
/*
 * Template Name: Sitemap
 */
?>

<?php get_header(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro">A list of all pages on the website</p>
</div>
<div class="lc lc-single">
	<div class="text">
		<ul>
		<?php wp_list_pages( $args ); ?>
		</ul>
	</div>
</div><!--end main-body-->
<?php get_footer(); ?>