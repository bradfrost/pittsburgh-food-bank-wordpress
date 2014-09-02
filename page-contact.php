<?php
/*
 * Template Name: Contact
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>
<div class="main-body">
	<div class="lc">
		<div class="g g-2up">
			<div class="gi">
				<a href="#">
					<figure>
						<?php $image = get_field('map_image'); ?>
						<a href="<?php the_field('map_url'); ?>"><img src="<?php echo $image['url'] ?>" alt="Greater Pittsburgh Community Food Bank" /></a>						<figcaption><a href="<?php the_field('map_url'); ?>">Get directions</a></figcaption>
					</figure>
				</a>
			</div>
			<div class="gi">
				<h2><?php echo get_bloginfo('name'); ?></h2>
				<?php the_field('address'); ?><br />
				<?php the_field('citystate'); ?> <?php the_field('zip'); ?><br />
				<?php $phone = get_field('phone'); ?>
				Phone: <a href="tel:+1<?php echo str_replace("-", "", $phone); ?>"><?php the_field('phone'); ?></a><br />
				Fax: <?php the_field('fax'); ?><br />
				Email: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="lc">
			<div class="list-section list-section-get-help">
				<h2 class="list-section-title">Get Help</h2>
				<p>If you need emergency food, please contact the Hunger Services Network of the <a href="<?php the_field('urban_league_website'); ?>">Urban League of Pittsburgh</a> at <?php the_field('urban_league_phone'); ?></p>
				<ul class="text-list">
				</ul>
			</div>
			<div class="list-section list-section-give-help">
				<h2 class="list-section-title">Give Help</h2>
				<p>If you want to donate money, please <a href="/donate">donate online</a> or call <a href="tel:+1<?php echo str_replace("-", "", $phone); ?>"><?php the_field('phone'); ?></a>.</p>
				<ul class="text-list">
				</ul>
			</div>
		</div>
	</section>

	<section class="section section-alt" id="departments">
		<header class="section-header">
			<h2 class="section-title">Contact Departments</h2>
			<p class="section-desc">Please call <strong><a href="tel:+1<?php echo str_replace("-", "", $phone); ?>"><?php the_field('phone'); ?></a></strong> and use the department's corresponding extension, or send an email.</p>
		</header>
		<div class="lc">
			<div class="g g-4up-linear">
				<?php
	 
					// check if the repeater field has rows of data
					if( have_rows('department') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('department') ) : the_row(); ?>        
					        <div class="gi" id="<?php echo $deptpath; ?>">
								<div class="block block-contact">
									<div class="b-body">
										<?php 
											$deptname = get_sub_field('department_name');
											$deptnamedash = str_replace(' ', '-', $deptname);
											$deptpath = strtolower($deptnamedash);
										?>
										<h3 class="b-title"><a href="#<?php echo $deptpath; ?>"><?php the_sub_field('department_name'); ?></a></h3>
										<a href="#" class="b-phone"><?php the_field('phone'); ?> ext. <?php the_sub_field('department_extension'); ?></a>
										<a href="#" class="b-email"><?php the_sub_field('department_email'); ?></a>
									</div>
								</div>
							</div>
				<?php 
				    endwhile;
				    endif;
				?>	 
					    
			</div><!--end .g-4up-->
		</div>
	</section>
	<section class="section section-pad contact-form-section">
		<header class="section-header">
			<h2 class="section-title">Send a Message</h2>
		</header>
		<div class="lc lc-single">
			<?php echo do_shortcode('[contact-form-7 id="111" title="Contact form 1"]'); ?>
		</div>
	</section>
</div><!--end .main-body-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>