<div id="mobile-drawer">
  <div class="drawer--inner">
    <?php do_action('before_drawer'); ?>
    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </nav>
    <?php do_action('after_drawer'); ?>
  </div>
</div>