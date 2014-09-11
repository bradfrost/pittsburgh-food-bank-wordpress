<?php
/*
 * Template Name: Get Help - Food Assistance
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

/* get the neighborhood value from the post fields and call the agencylist api for a list of agencies */
$nhood = htmlspecialchars($_POST["neighborhood"]);

$url = 'http://wordpress.pittsburghfoodbank.org:8888/gethelp/gethelp.cfc?method=agencylist&neighborhood=' . urlencode($nhood);
$content = file_get_contents($url);

/* decode the json results into an array */
$json = json_decode($content, true);
$arrayLen = sizeof($json);

/* set the initial map address in google if there are results */
if ($arrayLen > 0)
{
	$mapaddress = $json[0]['address'].$json[0]['city'].$json[0]['zip'];
}

?>

<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<form action="#" method="post" class="inline-form find-help">           
	    <fieldset>
		    <legend>Enter your neighborhood or ZIP</legend>
		    <div class="inline-container" id="neighborhood">
		   		<input type="text" name="neighborhood" placeholder="i.e. 15201, or Lawrenceville" id="help-field" class="typeahead help-field" data-provide="typeahead" dir="auto"
				value="<?php echo htmlspecialchars($_POST["neighborhood"])?>">
		    	<button class="neighborhood-submit">Search</button>
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
				<?php 
				foreach($json as $item){ ?>
							
	<?php /* store the agency address in the dir-mapaddress attribute so we can use it in javascript to change the map when they click on the agency */ ?> 
				
					<li >
						<div class="block block-directory">
							<div class="vcard">
								<div class="adr" dir-mapaddress="<?php print($item['address'] . ' ' . $item['city'] . ' ' . $item['zip']) ?>">
									<div class="org fn">
										<h3 class="organization-name b-title"><?php print $item['agencyname']?></h3>
									</div>
									<span class="locality" ><strong>Serves:  </strong><?php print $item['serves']?></span></br>
									<div class="street-address"><?php print $item['address']?></div>
									<?php if ($item['address2'] != '') { ?>
									<div class="street-address"><?php print $item['address2']?></div>
									<?php } ?>
									<span class="locality" ><?php print $item['city']?></span>, 
									<span class="postal-code"><?php print $item['zip']?></span>
									<div class="tel"><?php print $item['phone']?></div>
								</div>
							</div>
							<dl class="block-directory-extra is-vishidden">
								</br>
								<dt>Operating Hours</dt>
	<?php /* operating hours are in a single text field; for display purposes, line breaks are indicated by a + in the primarious field and this code breaks them into lines */ 
									$hours = explode("+", $item['hourscomments']);
									foreach($hours as $hourline) { 	
								?>
									<dd><?php print("$hourline")?></dd>
								<?php } ?></br>
								<dt>Contact</dt>
								<dd><?php print $item['contact']?></dd></br>
								<dt>Type of Program</dt>
								<dd><?php print $item['programtype']?></dd>
							</dl>
						<a href="#" class="text-btn">More info</a></div>
					</li>
					
		<?php 	} ?>
	 
				</ol>
			</div>
			<?php if ($arrayLen > 0 ) { ?>
			<div class="directory-map-container">
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGOK9vXhVlYy-jAlV9lUXiP0rpjP_NF88&q=<?php print $mapaddress; ?>" width="600" height="450" frameborder="0" style="border:0" id="directory-map"></iframe>
			</div>
			<?php 
			} 
			?>
		</div>
</div><!--end lc-->
<?php endwhile; endif; ?>
<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
<div class="l">
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>





