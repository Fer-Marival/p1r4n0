
	$( '#my-slider' ).sliderPro({
		width: 723, 
		height: 500,
		fade: true, 
    arrows: true,
		buttons: false,
	});

  $( '.more-sale' ).sliderPro({
    width: 250, 
    height: 500,
    arrows: true,
    buttons: false,
    slideDistance: 50,
    visibleSize: 1200,
    autoplay: true,
  });

 $( '.promotions' ).sliderPro({
    width: "100%", 
    height: 350,
    arrows: true,
    buttons: false,
    visibleSize: 1200,
    autoplay: true,
  });
/* menu responsive */
$('.menu-item').addClass('menu-trigger');
$('.menu-trigger').click(function(){
    $('body').toggleClass('no-scroll')
	   $('#menu-trigger').toggleClass('clicked');
	   $('.container').toggleClass('push');
	   $('.menu-type').toggleClass('open');
});

 /* Waypoints */
  $('#box').waypoint(function( direction) {
    if(direction == 'down'){
      $('.box1').addClass('animated fadeInRight show');

    } else{
        $('.box1').removeClass('show');
    }
  }, { offset: '80%' });
  $('#box2').waypoint(function( direction) {
    if(direction == 'down'){
      $('.box2').addClass('animated fadeInLeft show');

    } else{
        $('.box2').removeClass('show');
    }
  }, { offset: '80%' });
  $('#vista').waypoint(function( direction) {
    if(direction == 'down'){
      $('.box1').addClass('animated fadeInLeft show');

    } else{
        $('.box1').removeClass('show');
    }
  }, { offset: '80%' });
   $('#vista').waypoint(function( direction) {
    if(direction == 'down'){
      $('.box2').addClass('animated fadeInRight show');

    } else{
        $('.box2').removeClass('show');
    }
  }, { offset: '80%' });

  /* slide de promos */
$('#carouselExample').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


var Instafeed = require("instafeed");
var imagesLoaded = require("imagesLoaded");
var Masonry = require("masonry-layout");

var feed = new Instafeed({
  get: 'user',
  userId: 7493294533,
  accessToken: '7493294533.1677ed0.2c006cb41f694755b99942cb17103001',
  resolution: 'standard_resolution', 
  template: '<div class="grid-item"><a href="{{link}}" title="{{caption}}" data-fancybox="gallery" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
  limit: 9,
  sortBy: 'random',
  after: function() {
    var elem = document.querySelector('.grid');
    imagesLoaded(elem, function(instance) {
      var msnry = new Masonry(elem, {
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
      });
    });
  }
});
feed.run();

/* Back to top */
var $backToTop = $(".back-to-top");
$backToTop.hide();

$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $backToTop.fadeIn();
  } else {
    $backToTop.fadeOut();
  }
});

$backToTop.on('click', function(e) {
  $("html, body").animate({scrollTop: 0}, 500);
});

var $downTocontact = $('.contact');
$downTocontact.on('click', function(e) {  
   $('body,html').animate({ scrollTop: $('body').height() }, 500);
                return false;
});

/* Load Facebook SDK for JavaScript */
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//collection slide 
jQuery(document).ready(function($){
  var sliderContainers = $('.cd-slider-wrapper');

  if( sliderContainers.length > 0 ) initBlockSlider(sliderContainers);

  function initBlockSlider(sliderContainers) {
    sliderContainers.each(function(){
      var sliderContainer = $(this),
        slides = sliderContainer.children('.cd-slider').children('li'),
        sliderPagination = createSliderPagination(sliderContainer);

      sliderPagination.on('click', function(event){
        event.preventDefault();
        var selected = $(this),
          index = selected.index();
        updateSlider(index, sliderPagination, slides);
      });

      sliderContainer.on('swipeleft', function(){
        var bool = enableSwipe(sliderContainer),
          visibleSlide = sliderContainer.find('.is-visible').last(),
          visibleSlideIndex = visibleSlide.index();
        if(!visibleSlide.is(':last-child') && bool) {updateSlider(visibleSlideIndex + 1, sliderPagination, slides);}
      });

      sliderContainer.on('swiperight', function(){
        var bool = enableSwipe(sliderContainer),
          visibleSlide = sliderContainer.find('.is-visible').last(),
          visibleSlideIndex = visibleSlide.index();
        if(!visibleSlide.is(':first-child') && bool) {updateSlider(visibleSlideIndex - 1, sliderPagination, slides);}
      });
    });
  }

  function createSliderPagination(container){
    var wrapper = $('<ol class="cd-slider-navigation"></ol>');
    container.children('.cd-slider').find('li').each(function(index){
      var dotWrapper = (index == 0) ? $('<li class="selected"></li>') : $('<li></li>'),
        dot = $('<a href="#0"></a>').appendTo(dotWrapper);
      dotWrapper.appendTo(wrapper);
      var dotText = ( index+1 < 10 ) ? '0'+ (index+1) : index+1;
      dot.text(dotText);
    });
    wrapper.appendTo(container);
    return wrapper.children('li');
  }

  function updateSlider(n, navigation, slides) {
    navigation.removeClass('selected').eq(n).addClass('selected');
    slides.eq(n).addClass('is-visible').removeClass('covered').prevAll('li').addClass('is-visible covered').end().nextAll('li').removeClass('is-visible covered');

    //fixes a bug on Firefox with ul.cd-slider-navigation z-index
    navigation.parent('ul').addClass('slider-animating').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
      $(this).removeClass('slider-animating');
    });
  }

  function enableSwipe(container) {
    return ( container.parents('.touch').length > 0 );
  }
});
/* 360 */
/* Vista */
