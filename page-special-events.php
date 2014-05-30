<?php
/*
 * Template Name: Special Events
 */
?>
<?php get_header(); ?>
<div class="banner banner-pattern"></div>
<div class="l-3col">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="l-main">
		<div class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<p class="page-intro"><?php the_field('tagline'); ?></p>
		</div><!--end .page-header-->
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
		<?php include (TEMPLATEPATH . '/includes/section-nav-subpage.php');  ?>
	</div><!--end .l-sidebar-->
	<div class="l-sidebar2">
		<?php get_sidebar(); ?>
	</div>
	<?php endwhile; endif; ?>
</div><!--end .l-3col-->
<?php get_footer(); ?>