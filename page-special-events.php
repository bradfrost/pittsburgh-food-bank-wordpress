<?php
/*
 * Template Name: Special Events
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div><!--end .page-header-->
<div class="main-body l">
	<div class="l-main">
		<div class="text">
		<?php the_content(); ?>
		</div>
		
		<ul class="post-list">
		<?php
			$specialevents = get_pages( array( 'child_of' => 818 ) );
		
			foreach( $specialevents as $page ) {		
				$content = $page->post_content;
		
				$content = apply_filters( 'the_content', $content );
				$nospaces = str_replace(' ', '-', $page->post_title);
				$path = strtolower($nospaces);
			?>
				<li id="<?php echo $path; ?>">
					<h2><a href="#<?php echo $path; ?>"><?php echo $page->post_title; ?></a></h2>
					<div><?php echo $content; ?></div>
				</li>
			<?php
			}	
		?>
		</ul><!--end post-list-->
		
		<?php include (TEMPLATEPATH . '/includes/well-newsletter.php');  ?>
	</div><!--end .l-main-->
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div><!--end .l-sidebar-->
	<?php endwhile; endif; ?>
</div><!--end .main-body-->
<?php get_footer(); ?>