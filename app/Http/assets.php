<?php

namespace Impact\Theme\App\Http;

/*
|-----------------------------------------------------------------
| Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your theme stylesheets and scripts.
| In here you should also deregister all unwanted assets which
| can be shiped with various third-parity plugins.
|
*/

use function Impact\Theme\App\asset_path;

/**
 * Registers theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets() {
    wp_enqueue_style('bootstrap', asset_path('css/bootstrap.css'));
    wp_enqueue_style('app', asset_path('css/app.css'));
}
add_action('wp_enqueue_scripts', 'Impact\Theme\App\Http\register_stylesheets');

/**
 * Registers theme script files.
 *
 * @return void
 */
function register_scripts() {
    wp_enqueue_script('bootstrap', asset_path('js/bootstrap.js'), ['jquery'], null, true);
    wp_enqueue_script('app', asset_path('js/app.js'), ['bootstrap'], null, true);
}
add_action('wp_enqueue_scripts', 'Impact\Theme\App\Http\register_scripts');

/**
 * Registers editor stylesheets.
 *
 * @return void
 */
function register_editor_stylesheets() {
    add_editor_style(asset_path('css/bootstrap.css'));
    add_editor_style(asset_path('css/app.css'));
}
add_action('admin_init', 'Impact\Theme\App\Http\register_editor_stylesheets');


/**
 * Registers blocks
 * 
 * @return void
 */

function enqueue_block_assets(){
  wp_enqueue_script('impact-blocks',asset_path('js/blocks.js'),		array( 'wp-blocks', 'wp-element' ),'1.0.0');
}
add_action( 'enqueue_block_editor_assets', 'Impact\Theme\App\Http\enqueue_block_assets' );


/**
 * Moves front-end jQuery script to the footer.
 *
 * @param  \WP_Scripts $wp_scripts
 * @return void
 */
function move_jquery_to_the_footer($wp_scripts) {
    if (! is_admin()) {
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }
}
add_action('wp_default_scripts', 'Impact\Theme\App\Http\move_jquery_to_the_footer');
