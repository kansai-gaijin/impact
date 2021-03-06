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
    'logo' => 'https://impact-japan.net/wp-content/uploads/2020/01/impact-logo-main.png',
    'site_url' => get_site_url()
  ]);
  template('partials/drawer');
}
add_action('theme/head/header', 'Impact\Theme\Header\render_header');

/**
 * Renders layout's head.
 *
 * @see resources/templates/layout/head.tpl.php
 */
template('layout/head');