<?php

namespace Impact\Theme\Page;

/*
|------------------------------------------------------------------
| Page Controller
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
  if( !is_front_page() && !is_home() ):
    template('partials/page/page-header',[
      'title' => get_the_title(),
      'en_title' => get_post_meta( get_the_ID(), 'wpcf-english-title', true ),
      'background' => get_post_meta( get_the_ID(), 'wpcf-header-picture', true),
      'background_mob' => get_post_meta( get_the_ID(), 'wpcf-header-picture-mob', true),
    ]);
    elseif( is_archive() ):
      template('partials/page/page-header',[
        'title' => get_the_title(),
        'en_title' => get_post_meta( get_the_ID(), 'wpcf-english-title', true ),
        'background' => get_post_meta( get_the_ID(), 'wpcf-header-picture', true),
        'background_mob' => get_post_meta( get_the_ID(), 'wpcf-header-picture-mob', true),
      ]);
    elseif( is_home() ):
      template('partials/page/page-header',[
        'title' => get_the_title(),
        'en_title' => get_post_meta( get_the_ID(), 'wpcf-english-title', true ),
        'background' => get_post_meta( get_the_ID(), 'wpcf-header-picture', true),
        'background_mob' => get_post_meta( get_the_ID(), 'wpcf-header-picture-mob', true),
      ]);
  endif;
}
add_action('theme/page/content_before', 'Impact\Theme\Page\render_page_header');

/**
 * Renders single page.
 *
 * @see resources/templates/single.tpl.php
 */
template('page');
