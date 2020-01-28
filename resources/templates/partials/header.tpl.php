<?php do_action('theme/header/before'); ?>

<header id="site-header">
  <div class="large-wrapper">
    <h1 class="header--logo">
      <a href="<?= $site_url; ?>">
        <img src="<?= $logo; ?>" alt="<?= $tagline; ?>" />
      </a>
    </h1>
    <nav class="header--main-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
    </nav>
    <div class="header--contact">
      <ul>
        <li>
          <strong>Tel : </strong><a href="tel:06-000-0000">06-000-0000</a>
        </li>
        <li>
          <strong>Mail : </strong><a href="mailto:info@impact-japan.net">info@impact-japan.net</a>
        </li>
      </ul>
    </div>
    <div class="header--contact-sm">
      <a href="<?= $contact_link ?>">CONTACT</a>
    </div>
    <div class="header--hamb">
      <button class="hamburger js-nav-toggle">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
  </div>
</header>

<?php do_action('theme/header/after'); ?>