$(document).ready(function() {
    $('.header__navbar-item--notify').on('click', function(event) {
        event.stopPropagation();
        $('.header__notify').toggle();
        $('.nav-nofi-notice').hide();
        $('.nav-cart-list').hide();
        $('.nav-nofi-notice').text(0);
    });
    $('.nav-cart').on('click', function(event) {
        event.stopPropagation();
        $('.header__notify').hide();
        $('.nav-cart-list').toggle();
    });
    $('.header__notify-header span').on('click', function(event) {
        event.stopPropagation();
        $('.header__notify-item').addClass('seen');
    })
    $(document).click(function() {
        $('.header__notify').hide();
        $('.nav-cart-list').hide();
    });
}) 
    
