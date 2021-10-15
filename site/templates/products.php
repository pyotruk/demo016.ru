<?php snippet('header') ?>

  <main class="products" role="main">
    <?php foreach($page->children()->visible() as $product): ?>

      <div class="product">
        <a href="<?= $product->url() ?>">
        <div class="product-image">
          <figure>
            <img src="<?= $product->images()->sortBy('sort')->first()->crop(1500, 1500)->url() ?>" alt="<?= $product->title() ?>">
          </figure>
          <div class="product-image-hover">
            <figure>
              <img src="<?= $product->images()->sortBy('sort')->offset(1)->first()->crop(1500, 1500)->url() ?>" alt="<?= $product->title() ?>">
            </figure>
          </div>
        </div>
        <div class="product-description">
          <h3 class="product-title"><?= $product->title() ?></h3>
        </div>
        </a>
      </div>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
