$(document).ready(function(){
  $(window).bind('scroll', function() {
    var navHeight;
    if($(window).width()>320)
    {
      navHeight = $( window ).height() - 2739;
    }
    else {
      navHeight = $( window ).height()-2250;
    }
    if ($(window).scrollTop() > navHeight) {
      $('nav').addClass('fixed');
    }
    else {
      $('nav').removeClass('fixed');
    }
 });
});
