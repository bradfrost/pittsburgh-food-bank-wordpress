var $ =jQuery.noConflict();

var neighborhoods = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: 'http://wordpress.pittsburghfoodbank.org:8888/gethelp/gethelp.cfc?method=neighborhoodlist&zip=%QUERY'
});
 
neighborhoods.initialize();
 
$("#neighborhood .typeahead").typeahead(null, {
  name: 'neighborhood',
  displayKey: 'label',
  source: neighborhoods.ttAdapter()
});