$(function() {
  
var watchScroll =0;
var rightComments = $('.r-event .event-body');
  var leftComments = $('.l-event .event-body');
  TweenMax.staggerFrom(rightComments, 1, {x: 100, ease:Bounce.easeOut},1);
  TweenMax.staggerFrom(leftComments, 1, {x: -100,ease:Bounce.easeOut},1);

  $(window).on('scroll', function() {
    var scrollTop = $(window).scrollTop();
    (scrollTop > watchScroll)?
    $('footer').addClass('footer-up'):
      $('footer').removeClass('footer-up');
    
    watchScroll = scrollTop;
  })
})