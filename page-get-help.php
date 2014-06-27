<?php
/*
 * Template Name: Get Help
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
	<form action="#" method="post" class="inline-form find-help">           
		<fieldset>
		    <legend>Find help near you</legend>
		    <label for="help-field" class="is-vishidden">Email address</label>
		    <div class="inline-container">
		   		<input type="newsletter" placeholder="Enter your neighborhood or zip code" id="help-field" class="help-field">
		    	<button class="newsletter-submit">Search</button>
			</div>
		</fieldset>
	</form>
</div>
<div class="lc">
	<p class="banner-text">If you need emergency food, please call Hunger Services Network of the Urban League of Pittsburgh at</p>
	<a href="tel:+4123250749" class="banner-cta text-btn">412-325-0749</a>
</div>
<div class="lc">
	<section class="section">
		<h2 class="section-title">Our Programs</h2>
		<p class="section-desc">We offer a host of services to Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<div class="g g-3up">
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Food Security Partnership</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Produce to People</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">SNAP</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Farm Stand Project</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Community Harvest</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Summer Food</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Commodity</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Supplemental Food Program</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Nutrition</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Agency Relations</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
			<div class="gi">
				<div class="block block-thumb">
					<a href="#" class="b-inner">
						<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">								</div>
						<div class="b-text">
							<h2 class="b-title">Educational Programs</h2>
							<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</a>
				</div>					</div>
		</div>
	</section>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>