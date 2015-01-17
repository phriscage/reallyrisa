<div class="search-box">
<form action="/" method="get">
    <fieldset>
        <label for="search">Search in <?php echo home_url( '/' ); ?></label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" style="float: left;" />
        <input type="image" alt="Search" src="<?php home_url('/'); ?>/wp-content/uploads/2013/02/reallyrisa_SEARCHBUTTONsmall.png" style="height: 24px;padding-left: 8px;"/>
    </fieldset>
</form>
</div>

