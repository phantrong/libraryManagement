$(function() {
   $('.header__navbar-item--notify').on('click', function() {
    
    $('.header__notify').css('display') == "none"?$('.header__notify').css('display','block'):$('.header__notify').css('display','none')
    $('.header__notify-item').addClass('activeColor');
   setTimeout(() => {
    $('.header__notify-item').removeClass('activeColor');
   }, 1500)
  })

   
})