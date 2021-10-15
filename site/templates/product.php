<?php snippet('header') ?>

<?php if ($page->vimeolink()->isNotEmpty()): ?>
<div class="video-header">
  <div class="video-wrapper">
    <iframe src="https://player.vimeo.com/video/<?= $page->vimeolink() ?>?autoplay=0&autopause=0?api=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</div>
<?php endif ?>
  <main class="products" role="main">
    <div class="product-images">
      <div class="prev-button"></div>
      <div class="next-button"></div>
      <?php foreach ($page->images()->sortBy('sort') as $image): ?>
        <div class="product-cell" data-caption="<?= $image->caption() ?>">
          <figure>
            <img data-flickity-lazyload="<?= $image->resize(1000, null, 90)->url() ?>" alt="<?= $page->title() ?>">
          </figure>
        </div>
      <?php endforeach ?>
      <div id="image-counter"></div>
      <div id="caption"></div>
    </div>
    <div class="product-text">
      <h3><?= $page->title() ?></h3>
      <?= $page->text()->kirbytext() ?>
      <p class="status"></p>
    </div>
  </main>
<?php snippet('footer') ?>
