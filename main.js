$(function(){
  $('.product-row').click(function(){
    var $this = $(this).parent();
    $this.toggleClass('closed');
    $this.toggleClass('open');
  });
  // Flickity
  $('.main-carousel').flickity({
    cellSelector: '.carousel-cell',
    cellAlign: 'center',
		setGallerySize: true,
    imagesLoaded: true,
    wrapAround: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: true
  });
  $('.next').click(function(){
    $(this).parent().flickity('next');
  });
  $('.prev').click(function(){
    $(this).parent().flickity('previous');
  });
});
