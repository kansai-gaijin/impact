<?php

namespace Impact\Theme\Single;

/*
|------------------------------------------------------------------
| Single Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function Impact\Theme\App\template;

/**
 * Renders page header
 * 
 * @see resources/templates/partials/page/page-header.tpl.php
 */
function render_page_header(){
  template('partials/page/page-header',[
    'title' => get_the_title(),
    'en_title' => 'NEWS',
    'background' => get_the_post_thumbnail_url( ),
    'background_mob' => get_the_post_thumbnail_url( ),
    'date' => get_the_date()
  ]);
}
add_action('theme/index/content_before', 'Impact\Theme\Single\render_page_header');

/**
 * Renders single post.
 *
 * @see resources/templates/single.tpl.php
 */
template('single');
