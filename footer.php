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
  
}

/**
 * Checks for service page
 * 
 * @return boolean
 */
function is_service(){
  
  $p_id = get_the_ID();

  $wp_contact_id = array(127,194,224);

  return in_array($p_id,$wp_contact_id);
  
}

/**
 * Renders index page footer.
 *
 * @see resources/templates/index.tpl.php
 */
function render_footer()
{
  template('partials/footer', ['is_contact' => is_contact(), 'is_service' => is_service(), 'contact_url' => get_the_permalink(18)]);
}
add_action('theme/foot/footer', 'Impact\Theme\Footer\render_footer');



/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');

?>

<div id="loader">
  <div class="loader-inner">
    <figure>
      <img src="https://impact-japan.net/wp-content/uploads/2020/01/impact-logo.png" alt="" />
    </figure>
    <p>
      <img src="https://impact-japan.net/wp-content/uploads/2020/01/loader.gif" />
    </p>
  </div>
</div>