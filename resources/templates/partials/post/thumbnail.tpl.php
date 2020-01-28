<article class="post-list-post">
  <div class="post-image">
    <a href="<?php echo get_the_permalink(); ?>">
      <figure style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></figure>
    </a>
  </div>
  <div class="post-body">
    <h3>
      <a href="<?php echo get_the_permalink(); ?>">
        <?php echo get_the_title(); ?>
      </a>
    </h3>
    <p>
      <?php echo get_the_excerpt(); ?>
    </p>
    <p class="post-meta">
      <span class="post-date">
        <i class="far fa-clock"></i><?php echo get_the_date(); ?>
      </span>
      <a href="<?php echo get_the_permalink(); ?>">
        詳しく読む
      </a>
    </p>
  </div>
</article>