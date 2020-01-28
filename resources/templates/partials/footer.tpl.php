<?php do_action('theme/footer/before'); ?>

<footer id="site-footer">
  <?php if($is_contact): ?>
    <div class="footer--access">
      <div class="small-wrapper">
        <h2 class="imp-section-title anim fade">
          <small>ACCESS</small>アクセス・マップ
        </h2>
        <div class="access-map anim fade">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13132.061270630966!2d135.4780734!3d34.6290532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dd70d8ec9b97%3A0xa2c065d27d529d4b!2z5bGx5pys56ys5LiJ55eF6Zmi!5e0!3m2!1sja!2sjp!4v1579095207505!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="imp-button-wrapper anim fade">
          <a href="#" class="imp-button">
            グーグルマップで表示
          </a>
        </div>
      </div>
    </div>
  <?php elseif($is_service): ?>
    <div class="footer--access service" id="entry">
      <div class="small-wrapper">
        <div class="entry-wrapper">
          <h2 class="imp-section-title anim fade">
            <small>ENTRY</small>無料お申し込み
          </h2>
          <p class="md-center">
            フォームでのお問い合わせは24時間受け付けております。<br class="pc-only"/>
            お気軽にお問い合わせください。
          </p>
          <div class="entry-buttons">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <p class="button-wrapper anim fade-up">
                  <a class="but-dark" href="tel:06-000-0000"><i class="fas fa-phone-alt"></i> 06-000-0000</a>
                </p>
              </div>
              <div class="col-sm-12 col-md-6">
                <p class="button-wrapper anim fade-up">
                  <a class="but-light" href="http://impact.co.jp/?page_id=18"><i class="fas fa-envelope"></i> フォームでお申し込み</a>
                </p>
              </div>
            </div>
          </div>
          <h2 class="imp-section-title anim fade">
            <small>ACCESS</small>アクセスマップ
          </h2>
          <div class="access-map anim fade">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13132.061270630966!2d135.4780734!3d34.6290532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dd70d8ec9b97%3A0xa2c065d27d529d4b!2z5bGx5pys56ys5LiJ55eF6Zmi!5e0!3m2!1sja!2sjp!4v1579095207505!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
  <div class="footer--contact">
    <div class="small-wrapper">
      <div class="row">
        <div class="col-sm-12 col-md-6 anim fade">
          <?php if( is_active_sidebar( 'footer_col_1') ) : ?>
            <?php dynamic_sidebar('footer_col_1'); ?>
          <?php else: ?>
            <p>フッターのWidgetを追加して下さい。</p>
          <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-6 anim fade">
        <?php if( is_active_sidebar( 'footer_col_2') ) : ?>
            <?php dynamic_sidebar('footer_col_2'); ?>
          <?php else: ?>
            <p>フッターのWidgetを追加して下さい。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="footer--branding">
    <div class="footer--logo">
      <a href="<?php echo get_site_url(); ?>">
        <img src="http://impact.co.jp/wp-content/uploads/2020/01/impact-footer-lo.png" alt="" />
      </a>
    </div>
    <nav class="footer--nav">
      <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </nav>
    <div class="copywrite">
      <p>© Copywrite IMPACT株式会社</p>
    </div>
  </div>
</footer>
<div class="to-top">
  <button class="js-scroll-top">
    <i class="fas fa-chevron-up"></i>
  </button>            
</div>

<?php do_action('theme/footer/after'); ?>