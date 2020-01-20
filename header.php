<?php

namespace Impact\Theme\Header;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's opening markup. Template
| rendered here should include `wp_head()` function call.
|
*/

use function Impact\Theme\App\template;

/**
 * Renders index page header.
 *
 * @see resources/templates/index.tpl.php
 */
function render_header()
{
  template('partials/header', [
    'title' => get_the_title(),
    'logo' => 'http://impact.co.jp/wp-content/uploads/2020/01/temp-logo.png'
  ]);
  template('partials/drawer');
}
add_action('theme/head/header', 'Impact\Theme\Header\render_header');

/**
 * Renders page header
 * 
 * @see resources/templates/partials/page/page-header.tpl.php
 */
function render_page_header(){

  template('partials/page/page-header',[
    'title' => get_the_title(),
    'en_title' => get_post_meta( get_the_ID(), 'wpcf-english-title', true ),
    'background' => get_post_meta( get_the_ID(), 'wpcf-header-picture', true)
  ]);
  
}
add_action('theme/header/after', 'Impact\Theme\Header\render_page_header');

/**
 * Renders layout's head.
 *
 * @see resources/templates/layout/head.tpl.php
 */
template('layout/head');