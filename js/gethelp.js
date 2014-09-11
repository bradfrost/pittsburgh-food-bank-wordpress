//
//  Get Help
//

(function(w) {

	var $ =jQuery.noConflict();
	
	var $directoryList = $('.directory-list');
	
	var neighborhoods = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  remote: 'http://wordpress.pittsburghfoodbank.org/gethelp/gethelp.cfc?method=neighborhoodlist&zip=%QUERY'
	});
	 
	neighborhoods.initialize();
	 
	$("#neighborhood .typeahead").typeahead(null, {
	  name: 'neighborhood',
	  displayKey: 'label',
	  source: neighborhoods.ttAdapter()
	});

// change the google address when user clicks on an agency block

	$directoryList.on( "click", ".block", function(e){
	//		e.preventDefault();
			var $li = $(this).parent('li'),
				$mapaddress = $li.attr('dir-mapaddress');
				
				$mapurl = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyAGOK9vXhVlYy-jAlV9lUXiP0rpjP_NF88&q='  + $mapaddress;

			$('#directory-map').attr('src', $mapurl);			
//				$('#ingredient-form').submit();
	//		}
	});

})(this);