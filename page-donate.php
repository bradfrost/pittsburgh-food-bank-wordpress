<?php
/*
 * Template Name: Donate
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>	
</div>
<div class="main-body l">
	<section class="section lc">
		<header class="section-header">
			<h2 class="section-title">More Ways to Give</h2>
		</header>
		<div class="g g-3up">
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">Planned Giving</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">Donate food</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">View our store</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">Tribute Gifts</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">Donate Credit Card Reward Points</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_square.png" alt="Square Thumbnail">							</div>
						<div class="b-text">
							<h2 class="b-title">In-Kind Donations</h2>
							<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
						</div>
					</a>
				</div>				</div>
		</div><!--end .g-3up-->
	</section>
	<hr>
	<section class="section section-block">
		<div class="lc">
			<div class="section-img">
	<img src="../../images/fpo_hero.png" alt="Hero Image">				</div>
			<div class="section-body">
				<h2 class="">Volunteer</h2>
				<p class="">Can't make a financial donation? Donate your time and make a difference consectetur adipisicing elit. Tempore, enim, id! Iste repellendus quidem nesciunt.</p>
				<ul class="text-list">
					<li><a href="#">Volunteer opportunities</a></li>
					<li><a href="#">Upcoming Events</a></li>
					<li><a href="#">Organize a food drive</a></li>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>