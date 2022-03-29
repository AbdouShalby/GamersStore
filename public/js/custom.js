/*global console, $ */
$(function() 
{
  'use strict'

  // Cashing Scroll Up Element 
  var scrollButton = $("#scroll-up");
  // On Window Scroll
  $(window).scroll(function() 
  {
    $(this).scrollTop() >= 740 ? scrollButton.show() : scrollButton.hide();
  });
  // On Click Animation
  scrollButton.click(function() { $("html, body").animate({scrollTop : 0}, 0); });

  // Smoothly Scroll To Element
  $('.n-contact, .landing .row a').click(function(e)
  {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $('#' + $(this).data('scroll')).offset().top
    }, 0);
  });
});