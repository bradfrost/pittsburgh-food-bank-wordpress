<?php
/*
 * Template Name: Resources
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="lc">
	<div class="g g-3up">
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Learn About Hunger</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Learn About Food</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Recipe Rainbow</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Advocacy Information</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Frequently Asked Questions</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Helpful Links</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>