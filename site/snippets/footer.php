  <a href="mailto:<?= $site->email() ?>">
    <footer>
      <div class="contact">
        <?= $site->email() ?>
      </div>
    </footer>
  </a>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>
  <script src="https://player.vimeo.com/api/player.js"></script>
  <?= js(array(
    'assets/js/flickity.pkgd.min.js',
    'assets/js/plugins.js',
    'assets/js/main.js'
  )) ?>

  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','<?= $site->analytics()->html() ?>','auto');ga('send','pageview');
  </script>
</body>
</html>
