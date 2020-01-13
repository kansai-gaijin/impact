<form action="/" method="GET">
    <label for="search">
        <input
            id="search"
            type="text"
            name="s"
            value="<?php the_search_query(); ?>"
            placeholder="<?= __('Searching for...', Impact\Theme\App\config('textdomain')) ?>"
        >
    </label>

    <input type="submit" value="Search">
</form>
