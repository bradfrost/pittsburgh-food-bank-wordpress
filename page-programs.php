<?php
/*
 * Template Name: Programs
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<?php endwhile; endif; ?>
<div class="lc">
			<div class="g g-3up">
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Food Security Partnership</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Produce to People</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">SNAP</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Farm Stand Project</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Community Harvest</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Summer Food</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Commodity</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Supplemental Food Program</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Nutrition</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Agency Relations</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
				<div class="gi">
					<div class="block block-thumb">
						<a href="#" class="b-inner">
							<div class="b-img">
			<img src="../../images/fpo_thumb.png" alt="Thumb" />							</div>
							<div class="b-text">
								<h2 class="b-title">Educational Programs</h2>
								<p class="b-excerpt">140 characer or less description of the program Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</a>
					</div>				</div>
			</div>
		</div><!--end .lc-->
<?php get_footer(); ?>