<section id="page-header" class="anim">
  <div class="page-header--bg"></div>
  <div class="small-wrapper">
    <h1>
      <small><?= $en_title ?></small>
      <strong><?= $title ?></strong>
      <?php if(is_singular('post')):?>
      <small><?= $date ?></strong>
      <?php endif; ?>
    </h1>
  </div>
</section>
<style>
.page-header--bg{
  background:url(<?= $background_mob; ?>) no-repeat;
  background-size:cover;
  background-position:center;
}
@media(min-width:601px){
  .page-header--bg{
    background:url(<?= $background; ?>) no-repeat;
    background-size:cover;
    background-position:center;
  }
}
</style>