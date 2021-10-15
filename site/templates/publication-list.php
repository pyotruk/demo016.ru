<?php snippet('header') ?>

  <main role="main">
    <div class="publications">
      <?php foreach($page->children()->filterBy('intendedTemplate', 'zine')->visible() as $zine): ?>
        <div class="product closed">
          <div class="product-row">
            <div class="product-cover">
              <figure>
                <img src="<?= $zine->images()->sortBy('sort')->first()->resize(null, 600)->url() ?>" alt="<?= $zine->title()->html() ?>">
              </figure>
            </div>
            <div class="product-publication">
              <h3><?= $zine->title() ?></h3>
              <h4><?= $zine->author() ?></h4>
            </div>
            <div class="product-info">
              <?= $zine->description()->kt() ?>
            </div>
          </div>
          <div class="product-gallery">
            <div class="gallery-wrap">
              <div class="main-carousel">
                <div class="prev"></div>
                <div class="next"></div>
                <?php foreach($zine->images()->sortBy('sort')->offset(1) as $image): ?>
                <div class="carousel-cell">
                  <figure>
                    <img src="<?= $image->resize(1600)->url() ?>" alt="<?= $zine->title()->html() ?>">
                  </figure>
                </div>
                <?php endforeach ?>
              </div>
              <div class="product-text">
                <?= $zine->text()->kt() ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <?php foreach($page->children()->filterBy('intendedTemplate', 'default')->visible() as $p): ?>
    <div class="textarea">

        <?= $p->text()->kt()  ?>
    </div>
    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
