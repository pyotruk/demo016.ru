<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> &mdash; <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css(array(
    'assets/css/normalize.min.css',
    'assets/css/flickity.css',
    'assets/css/main.css'
  )) ?>
  <?= js('assets/js/vendor/modernizr-2.8.3.min.js') ?>
  <?php
    if ($page->intendedTemplate() == 'publication-list'):
      echo css('assets/css/flickity.css');
    endif;
  ?>

</head>
<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header role="banner">
      <?php snippet('menu') ?>
  </header>
