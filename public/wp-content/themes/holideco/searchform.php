<form action="<?php echo esc_url(site_url('/')) ?>" method="GET">
    <input type="search" name="s" placeholder="Geef een zoekterm op" value="<?php the_search_query() ?>" id="search-input">
    <noscript>
        <button class="btn">Zoeken</button>
    </noscript>
</form>