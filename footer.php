<?php

namespace Impact\Theme\Footer;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function Impact\Theme\App\template;

/**
 * Renders index page footer.
 *
 * @see resources/templates/index.tpl.php
 */
function render_footer()
{
  template('partials/footer');
}
add_action('theme/foot/footer', 'Impact\Theme\Footer\render_footer');

/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');
