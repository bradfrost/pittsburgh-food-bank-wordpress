<?php
/*
 * Template Name: About
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hero hero-text">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="lc">
	<div class="l-centered-single-col">
		<div class="text">
			<h2>Mission Statement</h2>
			<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, blanditiis, qui fugiat facere esse nam at eius aliquam veniam perferendis iste vel! Veritatis.</p>
			<h2>Award-winning Operations</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, aliquam, ullam nostrum ad sit maiores amet a exercitationem hic id sunt odit corporis autem ducimus quia possimus similique quaerat temporibus.</p>	
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostru</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostru</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostru</li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, aliquam, ullam nostrum ad sit maiores amet a exercitationem hic id sunt odit corporis autem ducimus quia possimus similique quaerat temporibus.</p>	
		</div>
	</div>
	<section class="section">
		<h2 class="section-title">More About Us</h2>
		<p class="section-desc">Learn more about our award-winning facilities, our operations, and more lorem ipsum dolor</p>
		<div class="g g-3up">
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Operations</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Board, Management, &amp; Staff</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Jobs &amp; Internship</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Agences</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Donors</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Sponsors</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Finances</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Fundraising Policy</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-text">
					<a href="#">
						<h2 class="b-title">Awards &amp; Press</h2>
						<p class="b-excerpt">This is the section excerpt</p>
					</a>
				</div>					</div>
		</div>
	</section>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>