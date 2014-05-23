<?php
/*
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="banner banner-hero">
	<div class="lc">
		<h2 class="banner-hero-text"><?php the_field('tagline'); ?></h2>
	</div>
</div><!--end .banner-hero-->
<div class="lc">
	
	<div class="g g-3up">
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="images/fpo_thumb.png" alt="Thumb" />							</div>
					<div class="b-text">
						<h2 class="b-title">Lorem ipsum dolor sit (37 characters)</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="images/fpo_thumb.png" alt="Thumb" />							</div>
					<div class="b-text">
						<h2 class="b-title">Lorem ipsum dolor sit (37 characters)</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="images/fpo_thumb.png" alt="Thumb" />							</div>
					<div class="b-text">
						<h2 class="b-title">Lorem ipsum dolor sit (37 characters)</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</a>
			</div>				</div>
	</div>
</div><!--end .lc-->
<div class="split">
	<div class="lc">
		<div class="g g-2up">
			<div class="gi split-col-1">
				<div class="split-inner">
					<h2 class="section-title">Get Help</h2>
					<p>We're hear to help. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quasi.</p>
					<ul class="text-list">
						<li><a href="#">Find food near you</a></li>
						<li><a href="#">View upcoming events</a></li>
						<li><a href="#">View simple, affordable recipes</a></li>
						<li><a href="#">View SNAP benefits</a></li>
						<li><a href="#">Learn more about hunger</a></li>
					</ul>
				</div>
			</div>
			<div class="gi split-col-2">
				<div class="split-inner">
					<h2 class="section-title">Give Help</h2>
					<p>It's easy to contribute to ending hunger. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quasi.</p>
					<ul class="text-list">
						<li><a href="#">Donate</a></li>
						<li><a href="#">Volunteer</a></li>
						<li><a href="#">Organize a food drive</a></li>
						<li><a href="#">View upcoming events</a></li>
						<li><a href="#">Become a sponsor</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="lc">
	<section class="section section-block">
		<div class="section-img">
<img src="../../images/fpo_hero.png" alt="Hero Image" />				</div>
		<div class="section-body">
			<h2 class="section-title">About the GPCFB</h2>
			<p class="section-desc">For the past xx years Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, enim, id! Iste repellendus quidem nesciunt.</p>
			<ul class="text-list">
				<li><a href="#">About our mission</a></li>
				<li><a href="#">Our history</a></li>
				<li><a href="#">Our leadership</a></li>
				<li><a href="#">Jobs &amp; Internships</a></li>
			</ul>
		</div>
	</section>
</div><!--end .lc-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>