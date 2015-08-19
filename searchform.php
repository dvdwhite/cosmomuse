<form action="/" method="get">
	<label for="search"><strong>SEARCH</strong></label>
	<input type="text" name="s" placeholder="LOOK INTO THE COSMOS" id="search" value="<?php the_search_query(); ?>" />
	<input id="search-button" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search-button.png" />
</form>