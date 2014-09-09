<?php
/*
 * Template Name: Recipe Rainbow
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

$ings = htmlspecialchars($_POST["ingredients"]);
$ingredients = explode(",", $ings);
$ingsLen = sizeof($ingredients);

$url = 'http://wordpress.pittsburghfoodbank.org/reciperainbow/reciperainbow.cfc?method=recipelist&ingredient=' . urlencode($ings);
$content = file_get_contents($url);
$recipes = json_decode($content, true);

?>


<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="l">
	<div class="lc">
		<div class="section">
			<div class="recipe-rainbow">
				<div class="recipe-toolbar">
					<form action="#" method="POST" class="inline-form" id="ingredient-form">
						<input type="hidden" name="ingredients" id="ingredientHiddenList" />
						<fieldset>
							<legend>Enter ingredients</legend>
							<label for="ingredient">Enter an ingredient:</label>
							<div class="inline-container" id="ingredient">
								<input type="text" name="ingredient" id="selectedingredient" class="typeahead" placeholder='i.e. "Carrots", "Beets"' data-provide="typeahead" dir="auto" 
									value="<?php echo htmlspecialchars($_POST["ingredient"])?>">
								<button class="btn">Add</button>
							</div>
						</fieldset>
					</form>
					
					<div class="ingredients-controls">
						<h4>Your ingredients:</h4>
						<ul class="ingredient-list">
						<?php foreach($ingredients as $item){  ?>
							<li data-ingredient-name="<?php print("$item") ?>"><?php print("$item")?><a href="#" class="ingredient-remove"><span class="icon-close"></span> Remove</a></li>
						<?php 	} ?>
						</ul>
					</div>
				</div>
				<div class="recipe-results">
					<h2 class="recipe-results-title">Recipes containing <span class="result-ingredient-list">
						<?php 	$i = 0;
								foreach($ingredients as $item){  ?>
							<strong data-ingredient-name="<?php print("$item") ?>"><?php print("$item") ?></strong>
							<?php $i = $i + 1;
								if ($i < $ingsLen) { ?>
								<span class="spacer"> and </span>
								
							<?php }
						 	} ?>
						</span>:</h2>
					<ul class="g g-2up">
					<?php 
						foreach($recipes as $item){ ?>
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title"><?php print $item['title'] ?></h3>
								<p class="b-desc"><?php print $item['description'] ?></p>
								<p class="b-ingredients">You have <strong><?php print $item['numitems'] ?></strong> of <strong><?php print $item['numing'] ?></strong> ingredients for this recipe.</p>
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