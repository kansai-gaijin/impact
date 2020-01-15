<?php

namespace Impact\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Sidebars
|-----------------------------------------------------------
|
| This file is for registering your theme sidebars,
| Creates widgetized areas, which an administrator
| of the site can customize and assign widgets.
|
*/

use function Impact\Theme\App\config;

/**
 * Registers the widget areas.
 *
 * @return void
 */
function register_widget_areas()
{
    register_sidebar([
      'id' => 'footer_col_1',
      'name' => __('フッターコラム①', config('textdomain')),
      'description' => __('フッターのコラム①', config('textdomain')),
      'before_title' => '<h5>',
      'after_title' => '</h5>',
    ]);
    register_sidebar([
      'id' => 'footer_col_2',
      'name' => __('フッターコラム②', config('textdomain')),
      'description' => __('フッターのコラム②', config('textdomain')),
      'before_title' => '<h5>',
      'after_title' => '</h5>',
    ]);

    register_sidebar([
      'id' => 'sidebar',
      'name' => __('アーカイブサイドバー', config('textdomain')),
      'description' => __('投稿のサイドバー', config('textdomain')),
      'before_title' => '<h5>',
      'after_title' => '</h5>',
  ]);
}
add_action('widgets_init', 'Impact\Theme\App\Structure\register_widget_areas');
