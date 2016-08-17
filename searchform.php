<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <label class="sr-only" for="s">Search</label>
  <input type="search" value="<?php the_search_query(); ?>" placeholder="Search…" class="form-control search-query" name="s" id="s" />
  
  <div class="search-btn-wrap">
  	<input type="submit" id="searchsubmit" value="Start search" class="search-submit caps" /><i class="fa fa-arrow-circle-right fa-lg btn-pointer"></i>
  </div>
</form>	