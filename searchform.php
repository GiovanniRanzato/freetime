

<form action="<?php echo esc_url(home_url("/")) ?>" method="get">
    <div class="cs-inline-text-input">
        <input name="s" id="search" type="text" placeholder="cerca..." value="<?php the_search_query(); ?>" >
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>
</form>

