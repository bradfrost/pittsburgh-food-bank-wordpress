<?php
/*
 * Template Name: Get Help - Food Assistance Directory
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<form action="#" method="post" class="inline-form find-help">           
		<fieldset>
		    <legend>Find food near you</legend>
		    <label for="help-field" class="is-vishidden">Email address</label>
		    <div class="inline-container">
		   		<input type="newsletter" placeholder="Enter your neighborhood or zip code" id="help-field" class="help-field">
		    	<button class="newsletter-submit">Search</button>
			</div>
		</fieldset>
	</form>
</div>
<div class="lc">
	<div class="directory section">
				<header class="section-header">
					<h2 class="section-title">Food assistance closest to you</h2>
					<p class="section-desc">These are the results closest to you lorem ipsum dolar</p>
				</header>
				
				<div class="directory-list-container">
				
				<ol class="directory-list">
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title">Our Lady of the&nbsp;Angels</h3>
									</div>
									<div class="street-address">204 37th Street</div>
									<span class="locality">Lawrenceville</span>, 
									<abbr title="Pennsylvania" class="region">PA</abbr>
									<span class="postal-code">15201</span>
									<div class="tel">412-682-3877</div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								<dt>Operating Hours</dt>
								<dd>Mondays and Tuesdays (11 AM - 12:30 PM)</dd>
								<dt>Contact</dt>
								<dd>Fran McFadden</dd>
								<dt>Type of Program</dt>
								<dd>This is a food pantry. A food pantry is an organization that stores and distributes food to individuals, usually in the form of weekly or monthly grocery bags.  

						</dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title">Our Lady of the&nbsp;Angels</h3>
									</div>
									<div class="street-address">204 37th Street</div>
									<span class="locality">Lawrenceville</span>, 
									<abbr title="Pennsylvania" class="region">PA</abbr>
									<span class="postal-code">15201</span>
									<div class="tel">412-682-3877</div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								<dt>Operating Hours</dt>
								<dd>Mondays and Tuesdays (11 AM - 12:30 PM)</dd>
								<dt>Contact</dt>
								<dd>Fran McFadden</dd>
								<dt>Type of Program</dt>
								<dd>This is a food pantry. A food pantry is an organization that stores and distributes food to individuals, usually in the form of weekly or monthly grocery bags.  

						</dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title">Our Lady of the&nbsp;Angels</h3>
									</div>
									<div class="street-address">204 37th Street</div>
									<span class="locality">Lawrenceville</span>, 
									<abbr title="Pennsylvania" class="region">PA</abbr>
									<span class="postal-code">15201</span>
									<div class="tel">412-682-3877</div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								<dt>Operating Hours</dt>
								<dd>Mondays and Tuesdays (11 AM - 12:30 PM)</dd>
								<dt>Contact</dt>
								<dd>Fran McFadden</dd>
								<dt>Type of Program</dt>
								<dd>This is a food pantry. A food pantry is an organization that stores and distributes food to individuals, usually in the form of weekly or monthly grocery bags.  

						</dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title">Our Lady of the&nbsp;Angels</h3>
									</div>
									<div class="street-address">204 37th Street</div>
									<span class="locality">Lawrenceville</span>, 
									<abbr title="Pennsylvania" class="region">PA</abbr>
									<span class="postal-code">15201</span>
									<div class="tel">412-682-3877</div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								<dt>Operating Hours</dt>
								<dd>Mondays and Tuesdays (11 AM - 12:30 PM)</dd>
								<dt>Contact</dt>
								<dd>Fran McFadden</dd>
								<dt>Type of Program</dt>
								<dd>This is a food pantry. A food pantry is an organization that stores and distributes food to individuals, usually in the form of weekly or monthly grocery bags.  

						</dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title">Our Lady of the&nbsp;Angels</h3>
									</div>
									<div class="street-address">204 37th Street</div>
									<span class="locality">Lawrenceville</span>, 
									<abbr title="Pennsylvania" class="region">PA</abbr>
									<span class="postal-code">15201</span>
									<div class="tel">412-682-3877</div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								<dt>Operating Hours</dt>
								<dd>Mondays and Tuesdays (11 AM - 12:30 PM)</dd>
								<dt>Contact</dt>
								<dd>Fran McFadden</dd>
								<dt>Type of Program</dt>
								<dd>This is a food pantry. A food pantry is an organization that stores and distributes food to individuals, usually in the form of weekly or monthly grocery bags.  

						</dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
				</ol>
			</div>
			<div class="directory-map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97183.46594409148!2d-79.98050050000002!3d40.43136844999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f16f48068503%3A0x8df915a15aa21b34!2sPittsburgh%2C+PA!5e0!3m2!1sen!2sus!4v1404788856245" width="600" height="450" frameborder="0" style="border:0" id="directory-map"></iframe>
			</div>
		</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>