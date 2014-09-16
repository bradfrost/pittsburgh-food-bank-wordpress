//
// Recipe Rainbow
//


(function(w) {
	
	var $ingredientForm = $('#ingredient-form'),
		$ingredientInput = $('#selectedingredient'),
		$ingredientControls = $('.ingredients-controls'),
		$ingredientList = $('.ingredient-list'),
		$ingList = "";
	
	// if ingredients are already selected, gather them for next submit
	var ingItems = $(".ingredient-list li");
	ingItems.each(function(index) {
//		console.log(index + ": " + $(this).attr('data-ingredient-name'));
		item = $(this).attr('data-ingredient-name');
		$ingList = $ingList + item.replace(",",";") + ",";
	});
	
	//Add Typeahead to the ingredient
		
	var ingredients = new Bloodhound({
  		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
  		queryTokenizer: Bloodhound.tokenizers.whitespace,
  		remote: 'http://wordpress.pittsburghfoodbank.org/reciperainbow/recipeLookups.cfc?method=ingredientlist&ing=%QUERY'
	});
	 
	ingredients.initialize();
	 
	$("#ingredient .typeahead").typeahead(null, {
	  name: 'q',
	  displayKey: 'label',
	  source: ingredients.ttAdapter()
	}).on('typeahead:selected', function(e, data) {
	  $('.get-ingredient').submit();
	});;
	//Hide initially control list 
//			$ingredientControls.hide();
	
	
		
	//Submit Ingredient Form
	$ingredientForm.submit(function(e) {
//		e.preventDefault();
		var val = $ingredientInput.val();
		
		if (val) {
			updateIngredientList(val);
//			updateTitle(val);
			$ingredientInput.val('');
		}
		
			// remove last comma before submit
			$ingList = $ingList.slice(0, - 1);
			// set hidden ingredients field for submit
			$('input#ingredientHiddenList').val($ingList);
		
	});
	
	//Update list of ingredients
	function updateIngredientList(val) {
		$ingredientControls.show();
		
//		$ingredientList.append('<li data-ingredient-name="'+ val +'">'+ val +' <a href="#" class="ingredient-remove"><span class="icon-close"></span> Remove</a></li>');
	
		$ingList = $ingList + val.replace(",",";") + ",";
	}
	
	//Remove ingredient
	$ingredientList.on( "click", ".ingredient-remove", function(e){
//		e.preventDefault();
		var $li = $(this).parent('li'),
			$ingredient = $li.attr('data-ingredient-name');
		
//		$li.remove();
		$ing = $ingredient.replace(',',';') +',';
		$ingList = $ingList.replace($ing,'');
		
//		updateResults();
//		updateTitle($ingredient,"remove");
		
//		if($('.ingredient-list li').length==0) {
//			$ingredientControls.hide();
//		}
//		else {
			$('#ingredient-form').submit();
//		}
	});
	
	//Update Recipe Results Title
	function updateTitle(val, action) {
		
		if(action == "remove") {
			$('.result-ingredient-list strong[data-ingredient-name="'+ val +'"]').remove();
		} else {
			$('.result-ingredient-list').append('<strong data-ingredient-name="'+ val +'">'+ val +'</strong>');
		}
		
		var numIngredients = $('.result-ingredient-list strong').length,
			ingredientTitle = $('.result-ingredient-list strong:gt(0)');
		
		$('.result-ingredient-list .spacer').remove();
		
		if(numIngredients > 1) {
			$('<span class="spacer"> and </span>').insertBefore(ingredientTitle);
		}
	}
	
	
	//Update Recipe Result List
	function updateResults() {
		//Dan, this is where we make a call to the JSON file to fetch the recipe results	
	}

	//Hover state for recipe result
	$('.block-recipe').hover(
		function(){
			$(this).find('.btn').addClass('active');
		}, 
		function() {
			$(this).find('.btn').removeClass('active');
		}
	);

})(this);