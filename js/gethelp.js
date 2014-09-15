//
//  Get Help
//

(function(w) {

	
	var $directoryList = $('.directory-list');
	
	var neighborhoods = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  remote: 'http://wordpress.pittsburghfoodbank.org/gethelp/gethelp.cfc?method=neighborhoodlist&zip=%QUERY'
	});
	 
	neighborhoods.initialize();
	 
	$("#neighborhood .typeahead").typeahead(null, {
	  name: 'q',
	  displayKey: 'label',
	  source: neighborhoods.ttAdapter()
	}).on('typeahead:selected', function(e, data) {
	  $('.find-help').submit();
	});;

// change the google address when user clicks on an agency block

	$directoryList.on( "click", ".block-directory", function(e){
	//		e.preventDefault();
			var $mapaddress = $(this).find('.adr').attr('dir-mapaddress');
				
				$mapurl = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyAGOK9vXhVlYy-jAlV9lUXiP0rpjP_NF88&q='  + $mapaddress;

			$('#directory-map').attr('src', $mapurl);
			$('.directory-list > li').removeClass('active');			
			$(this).parent('li').addClass('active');
	});
	
	
	
	
	$('.block-directory-extra').addClass('is-vishidden');
	
	$('.block-directory .text-btn').on('click', function(e) {
		var $this = $(this),
			$directoryExtra = $this.prev();
		
		e.stopPropagation();
		e.preventDefault();

		
		if($directoryExtra.hasClass('is-vishidden')) {
			$directoryExtra.removeClass('is-vishidden');
			$this.text('Less Info');
		} else {
			$directoryExtra.addClass('is-vishidden');
			$this.text('More Info');
		}
	});

})(this);