<?php
/*
 * Template Name: Recipe Rainbow - Recipe
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

/* get the recipe guid value from the post fields and call the recipedetail api for the details */
$recipeguid = htmlspecialchars($_GET["q"]);

if ($recipeguid != '') {
	$url = 'https://www.pittsburghfoodbank.org/reciperainbow/reciperainbowlookups.cfc?method=getrecipe&recipe_guid=' . urlencode($recipeguid);
	$content = file_get_contents($url);

	/* decode the json results into an array */
	$json = json_decode($content, true);
	$arrayLen = sizeof($json);
	$item = $json[0];
}
else {
		$arrayLen = 0;
}

?>

<div class="page-header cucumbers">
	<h1 class="page-title"><?php print $item['recipe_name'] ?></h1>
	<p class="page-intro"><?php print $item['short_description'] ?></p>
</div>
<div class="main-body l">

	<div class="l-main lc lc-single">

		<div class="text">

		<h2>Ingredients and Instructions</h2>

<?php print $item['cooking_instructions'] ?>

		<h2>Nutrition Information</h2>
		<p><img src="https://www.pittsburghfoodbank.org/reciperainbow/nutritionfacts/<?php print strtolower($item['recipe_guid']) ?>.jpg" alt="<?php print $item['recipe_guid'] ?>" width="138" height="300" class="alignnone size-medium wp-image-2919" /></p>
<p>All recipes ranked according to <a href="/resources/nutrition/chop/">CHOP for nutritional quality</a></p>
		</div>

	</div><!--end .l-main-->
	<div class="well">

	<div class="lc lc-single">

		<h2 class="well-title">Browse more recipes</h2>

		<p class="well-desc">Make affordable and healthy meals based on ingredients you already have with Recipe Rainbow</p>

		<a href="/resources/recipe-rainbow" class="btn">View Recipe Rainbow</a>

	</div>

</div><!--end .well-->




<?php endwhile; endif; ?>
<div class="l">
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>





