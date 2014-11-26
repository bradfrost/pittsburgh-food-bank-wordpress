<?php
/*
 * Template Name: Recipe Detail
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	if( isset($_GET['q']) ) {
		$ings = htmlspecialchars($_GET["q"]);
		$ingredients = explode(",", $ings);
		$ingsLen = sizeof($ingredients);
		
		$url = 'http://wordpress.pittsburghfoodbank.org/reciperainbow/recipeLookups.cfc?method=recipelist&q=' . urlencode($ings);
		$content = file_get_contents($url);
		$recipes = json_decode($content, true);
		$recipeLen = sizeof($recipes);
	}
	else {
		$ingredients = [];
		$ingsLen = 0;
		$recipes = [];
		$recipeLen = 0;
	}
?>


<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="l">
	<div class="lc">
		<div class="section">
			<div class="recipe-rainbow">
				<div>
				<div class="recipe-toolbar">
					<form action="" method="GET" class="inline-form get-ingredient" id="ingredient-form">
						<input type="hidden" name="q" id="ingredientHiddenList" />
						<fieldset>
							<legend>Enter ingredients</legend>
							<label for="ingredient">Enter an ingredient:</label>
							<div class="inline-container" id="ingredient">
								<input type="text" name="" id="selectedingredient" class="typeahead" placeholder='i.e. "Carrots", "Beets"' data-provide="typeahead" dir="auto" 
									value="">
								<button class="btn">Add</button>
							</div>
						</fieldset>
					</form>
					
					<div class="ingredients-controls">
					<?php if($ingsLen > 0 && $ingredients[0] !== '') { ?>
						<h4>Your ingredients:</h4>
						<ul class="ingredient-list">
						<?php foreach($ingredients as $item){  
							$item = str_replace(";",",",$item);
							if ($item !== '') {?>
							<li data-ingredient-name="<?php print("$item") ?>"><?php print("$item")?><a href="#" class="ingredient-remove"><span class="icon-close"></span> Remove</a></li>
						<?php 	}} ?>
						</ul>
					<?php } ?>					
					</div>
					<div>
						<a href="https://play.google.com/store/apps/details?id=air.com.gpcfb.reciperainbow&hl=en">
						<img class="alignnone wp-image-3176" title="Recipe Rainbow on Google Play store" 
						src="https://www.pittsburghfoodbank.org/wp-content/uploads/2014/11/RR-banner-google-play.jpg" 
						alt="RR Google Play" width="300" height="106" /></a>
					</div>
					<div>
						<a href="https://itunes.apple.com/us/app/recipe-rainbow/id804114191?mt=8">
						<img class="alignnone wp-image-3176" title="Recipe Rainbow on Apple iTunes" 
						src="https://www.pittsburghfoodbank.org/wp-content/uploads/2014/11/RR-banner-apple-app-store.jpg" 
						alt="RR Apple iTunes" width="300" height="106" /></a>
					</div>
				</div>
				</div>
				<div class="recipe-results">
					<?php if($recipeLen > 0) { ?>
					<h2 class="recipe-results-title"><?php print("$recipeLen") ?> Recipes containing <span class="result-ingredient-list">
						<?php 	$i = 0;
								foreach($ingredients as $item){  
									$item = str_replace(";",",",$item); ?>
							<strong data-ingredient-name="<?php print("$item") ?>"><?php print("$item") ?></strong>
							<?php $i = $i + 1;
								if ($i < $ingsLen) { ?>
								<span class="spacer"> or </span>
								
							<?php }
						 	} ?>
						</span>:</h2>
					<?php } ?>
					<ul class="g g-2up">
					<?php 
						foreach($recipes as $item){ ?>
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title"><?php print $item['recipe_name'] ?></h3>
								<p class="b-desc"><?php print $item['short_description'] ?></p>
								<p class="b-ingredients">You have <strong><?php print $item['have_ingredients'] ?></strong> of <strong><?php print $item['num_ingredients'] ?></strong> ingredients for this recipe.</p>
								<button class="btn btn-small">View Recipe</button>
							</a>
						</li>
					<?php 	} ?>
					</ul>
				</div>
			</div>
		</div>
	</div><!--end .lc-->
	
	<?php include (TEMPLATEPATH . '/includes/well.php');  ?>
	<div class="l-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>