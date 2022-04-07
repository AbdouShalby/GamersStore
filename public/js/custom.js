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

  let cart=document.querySelectorAll(".addToCart");
  console.log(cart);

  let products = [
    {
      name:'Acer',
      price: 2000,
      inCart: 0
    },
    {
      name:'Apple',
      price: 4000,
      inCart: 0
    },
    {
      name:'HP',
      price: 9000,
      inCart: 0
    },
    {
      name:'Dell',
      price: 8000,
      inCart: 0
    }
  ]

  for (let i=0; i<cart.length; i++){
    cart[i].addEventListener('click', ()=>{
      cartNumbers(products[i]);
      totalCost(products[i]);
    });
  }

  function cartNumbers(product)
  {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers)
    {
      localStorage.setItem('cartNumbers', productNumbers + 1);
      document.querySelector('.countItem').textContent = productNumbers + 1;
    } else {
    localStorage.setItem('cartNumbers', 1);

    document.querySelector('.countItem').textContent = 1;
    }
  }

  function totalCost(product)
  {
    let cartCost = localStorage.getItem('totalCost');
    if (cartCost != null) {
      cartCost = parseInt(cartCost);
      localStorage.setItem('totalCost', cartCost + product.price)
    } else {
    localStorage.setItem('totalCost', product.price);
    }
  }

  function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    document.querySelector('.countItem').textContent = productNumbers;
  }

  onLoadCartNumbers();
});