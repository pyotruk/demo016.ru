$(function(){
  $('.product-images').flickity({
    cellSelector: '.product-cell',
    cellAlign: 'center',
    contain: true,
    lazyLoad: 2,
    imagesLoaded: true,
    wrapAround: true,
    setGallerySize: true,
    draggable: true,
    pageDots: false
  });
  $('.next-button').click(function(){
    $(this).parent().flickity('next');
  });
  $('.prev-button').click(function(){
    $(this).parent().flickity('previous');
  });

  var $carousel = $('.product-images').flickity();
  var $carouselStatus = $('p.status');
  var $caption = $('#caption');
  var flkty = $carousel.data('flickity');

  function updateStatus() {
    var cellNumber = flkty.selectedIndex + 1;
    $carouselStatus.text( cellNumber + ' / ' + flkty.slides.length + ' — ' +  $('.is-selected').data('caption'));
    $caption.html('');
    $caption.html($('.is-selected').data('caption'));
  }
  updateStatus();
  $carousel.on( 'select.flickity', updateStatus );

  var iframe = document.querySelector('iframe');
  var player = new Vimeo.Player(iframe);
  var played;
  player.on('play', function() {
      $('.video-header').css('max-height', '100vh');
      played = true;
  });
  player.on('pause', function() {
      $('.video-header').css('max-height', '80vh');
  });
  player.on('ended', function() {
      $('.video-header').css('max-height', '80vh');
      $('.video-header').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
        function(e) {
          $('html, body').animate({
            scrollTop: $('main.products').offset().top
          }, 400);
      });
  });
})
