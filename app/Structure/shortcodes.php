<?php

namespace Impact\Theme\App\Structure;

/*
|--------------------------------------------------------------------------
| Custom Shortcodes
|--------------------------------------------------------------------------
|
| This file is for registering your shortcodes. Shortcodes allows to facade
| a code logic behind readable piece of text. Below you have an example
| which facilitates outputing markup with template() helper function.
|
*/

use function Impact\Theme\App\template;

/**
 * Renders a [button] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_button_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        'href' => '#'
    ], $atts);

    ob_start();

    template('shortcodes/button', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('button', 'Impact\Theme\App\Structure\render_button_shortcode');


/**
 * Renders contact info
 * @return string
 */
function render_contact_info(){
  
  ob_start();

?>
<div class="imp-contact-info">
  <h4>Address</h4>
  <p>
    〒000-0000<br/>
    ヲコスケ必権ぴねドづ帳開写返ソオヒテ学意治浅店をぎ<br/>
    てー邦本必わけ毎器メ平非トざゅ転己我えち
  </p>
  <h4>Tel</h4>
  <p>
    <a href="tel:06-000-0000">06-000-0000</a>
  </p>
  <h4>Mail</h4>
  <p>
    <a href="mailto:info@impact.co.jp">info@impact.co.jp</a>
  </p>
</div>
<?php

  return ob_get_clean();

}
add_shortcode('contact_info', 'Impact\Theme\App\Structure\render_contact_info');

/**
 * Renders news-grid
 * @return string
 */

 function render_news_grid(){

  ob_start();

?>
  <div class="news-grid">
    <div class="news-grid--wrapper">

      <article class="news-grid--item large">
        <a href="#">
          <figure style="background:url(http://impact.co.jp/wp-content/uploads/2020/01/service-3.jpg) no-repeat; background-position:center; background-size:cover;"></figure>
          <div class="content">
            <p class="date">
              <i class="fas fa-clock"></i> 2020/01/07
            </p>
            <h3>読留ノタヌユ一価ラレ機画ヲコスケ必権ぴねドづ帳開写返ソオヒテ学意治浅店をぎ</h3>
          </div>
        </a>
      </article>
      <article class="news-grid--item">
      <a href="#">
          <figure style="background:url(http://impact.co.jp/wp-content/uploads/2020/01/service-3.jpg) no-repeat; background-position:center; background-size:cover;"></figure>
          <div class="content">
            <p class="date">
              <i class="fas fa-clock"></i> 2020/01/07
            </p>
            <h3>読留ノタヌユ一価ラレ機画ヲコスケ必権ぴねドづ帳開写返ソオヒテ学意治浅店をぎ</h3>
          </div>
        </a>
      </article>
      <article class="news-grid--item">
      <a href="#">
          <figure style="background:url(http://impact.co.jp/wp-content/uploads/2020/01/service-3.jpg) no-repeat; background-position:center; background-size:cover;"></figure>
          <div class="content">
            <p class="date">
              <i class="fas fa-clock"></i> 2020/01/07
            </p>
            <h3>読留ノタヌユ一価ラレ機画ヲコスケ必権ぴねドづ帳開写返ソオヒテ学意治浅店をぎ</h3>
          </div>
        </a>
      </article>

    </div>
  </div>
<?php

  return ob_get_clean();

}
add_shortcode('news_grid', 'Impact\Theme\App\Structure\render_news_grid');