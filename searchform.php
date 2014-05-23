<form action="<?php echo home_url( '/' ); ?>" method="get" role="search" id="searchform" class="searchform inline-form search-form">           
	<fieldset>
	    <legend class="is-vishidden">Search</legend>
	    <label for="search" class="is-vishidden">Search</label>
	    <input type="search" name="s" placeholder="Search" id="search" class="search-field" value="<?php the_search_query(); ?>" />
	    <button class="search-submit">
	    	<span class="icon-search" aria-hidden="true"></span>
	    	<span class="is-vishidden">Search</span>
	    </button>
	</fieldset>
</form><!--end .search-form-->