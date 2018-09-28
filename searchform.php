<form role="search" action="<?php echo home_url('/'); ?>" method="get" class="form-inline mt-2 mt-md-0">
    <input type="search" class="form-control mr-sm-2" name="s" id="search" value="<?php echo the_search_query(); ?>" />
    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
</form>