<?php

namespace Impact\Theme\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function Impact\Theme\App\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
        'header' => __('Header', config('textdomain')),
    ]);
    register_nav_menus([
      'drawer' => __('Drawer', config('textdomain')),
    ]);
    register_nav_menus([
      'footer' => __('Footer', config('textdomain')),
  ]);
}
add_action('after_setup_theme', 'Impact\Theme\App\Structure\register_navigation_areas');
