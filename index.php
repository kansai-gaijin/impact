<?php

namespace Impact\Theme\Index;

/*
|------------------------------------------------------------------
| Index Controller
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
    'title' => 'ニュース＆トピックス',
    'en_title' => 'NEWS',
    'background' => 'https://impact-japan.net/wp-content/uploads/2020/01/news-header.jpg',
    'background_mob' => 'https://impact-japan.net/wp-content/uploads/2020/01/news-header-mob.jpg',
  ]);
}
add_action('theme/index/content_before', 'Impact\Theme\Index\render_page_header');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('index');

