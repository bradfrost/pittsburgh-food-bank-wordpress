<?php
/*
 * Template Name: Recipe Rainbow
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-header <?php the_field('header_image'); ?>">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>
</div>

<div class="l">
	<div class="lc">
		<div class="section">
			<div class="recipe-rainbow">
				<div class="recipe-toolbar">
					<form action="#" method="get" class="inline-form" id="ingredient-form">
						<fieldset>
							<legend>Enter ingredients</legend>
							<label for="ingredient">Enter an ingredient:</label>
							<div class="inline-container">
								<input type="text" id="ingredient" class="typeahead" placeholder='i.e. "Carrots", "Beets"' />
								<button class="btn">Add</button>
							</div>
						</fieldset>
					</form>
					
					<div class="ingredients-controls">
						<h4>Your ingredients:</h4>
						<ul class="ingredient-list">
							
						</ul>
					</div>
				</div>
				<div class="recipe-results">
					<h2 class="recipe-results-title">Recipes containing <span class="result-ingredient-list"></span>:</h2>
					<ul class="g g-2up">
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title">Beets&nbsp;Roesti</h3>
								<p class="b-desc">Traditional Swiss patty, but made with beets! </p>
								<p class="b-ingredients">You have <strong>2</strong> of <strong>5</strong> ingredients for this recipe.</p>
								<button class="btn btn-small">View Recipe</button>
							</a>
						</li>
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title">Beets&nbsp;Roesti</h3>
								<p class="b-desc">Traditional Swiss patty, but made with beets! </p>
								<p class="b-ingredients">You have <strong>2</strong> of <strong>5</strong> ingredients for this recipe.</p>
								<button class="btn btn-small">View Recipe</button>
							</a>
						</li>
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title">Beets&nbsp;Roesti</h3>
								<p class="b-desc">Traditional Swiss patty, but made with beets! </p>
								<p class="b-ingredients">You have <strong>2</strong> of <strong>5</strong> ingredients for this recipe.</p>
								<button class="btn btn-small">View Recipe</button>
							</a>
						</li>
						<li class="gi">
							<a href="#" class="block block-recipe">
								<h3 class="b-title">Beets&nbsp;Roesti</h3>
								<p class="b-desc">Traditional Swiss patty, but made with beets! </p>
								<p class="b-ingredients">You have <strong>2</strong> of <strong>5</strong> ingredients for this recipe.</p>
								<button class="btn btn-small">View Recipe</button>
							</a>
						</li>
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