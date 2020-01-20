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
 * Checks for contact page
 * 
 * @return boolean
 */
function is_contact(){
  
  $p_id = get_the_ID();

  $wp_contact_id = 18;

  return ($wp_contact_id === $p_id);
  //return false;
}

/**
 * Renders index page footer.
 *
 * @see resources/templates/index.tpl.php
 */
function render_footer()
{
  template('partials/footer', ['is_contact' => is_contact(), 'contact_url' => get_the_permalink(18)]);
}
add_action('theme/foot/footer', 'Impact\Theme\Footer\render_footer');



/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');
