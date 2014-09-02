<?php
/*
 * Template Name: Get Help - Food Assistance Directory
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

$nhood = htmlspecialchars($_POST["neighborhood"]);

$url = 'http://wordpress.pittsburghfoodbank.org:8888/gethelp/gethelp.cfc?method=agencylist&neighborhood='.$nhood;
$content = file_get_contents($url);
$json = json_decode($content, true);
$firstmap = $json[0]['address'].$json[0]['city'].$json[0]['zip'];

?>

<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<form action="#" method="post" class="inline-form find-help">           
	    <fieldset>
		    <legend>Enter your neighborhood or ZIP</legend>
		    <div class="inline-container" id="neighborhood">
		   		<input type="newsletter" name="neighborhood" placeholder="i.e. 15201, or Lawrenceville" id="help-field" class="typeahead help-field" data-provide="typeahead" dir="auto">
		    	<button class="newsletter-submit">Search</button>
			</div>
	    </fieldset>
	</form>
</div>
<div class="lc">
	<div class="directory section">
				<header class="section-header">
					<h2 class="section-title">Food assistance closest to you</h2>
					<p class="section-desc">These are the results closest to you.</p>
				</header>
				
				<div class="directory-list-container">
				
				<ol class="directory-list">
				<?php  foreach($json as $item){ ?>
					<li>
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr">
									<div class="org fn">
										<h3 class="organization-name b-title"><?php print $item['agencyname']?></h3>
									</div>
									<div class="street-address"><?php print $item['address']?></div>
									<span class="locality"><?php print $item['city']?></span>, 
									<span class="postal-code"><?php print $item['zip']?></span>
									<div class="tel"><?php print $item['phone']?></div>
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
				<?php } ?>
	 
				</ol>
			</div>
			<div class="directory-map-container">
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGOK9vXhVlYy-jAlV9lUXiP0rpjP_NF88&q=<?php print $firstmap; ?>" width="600" height="450" frameborder="0" style="border:0" id="directory-map"></iframe>
			</div>
		</div>

</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/typeahead.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/gethelp.js"></script>





