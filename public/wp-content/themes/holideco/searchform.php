<form action="<?php echo esc_url(site_url('/')) ?>" method="GET">
    <input type="search" name="s" value="<?php the_search_query() ?>">
    <button><i data-feather="search"></i> Zoeken</button>
</form>