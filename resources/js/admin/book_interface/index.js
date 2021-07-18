require('../welcome/scroll_smooth')
require('./cart')

$(document).ready(function() {
    $('.view-cart').click(function() {
        $('.cart-interface').show(500);
    })
    $('.book-btn-sub').click(function() {
        $('.book-num-input').val(parseInt($('.book-num-input').val())-1);
        if($('.book-num-input').val() <= 1) {
            $('.book-num-input').val(1);
        }
    })
    $('.book-btn-add').click(function() {
        $('.book-num-input').val(parseInt($('.book-num-input').val())+1);
        if($('.book-num-input').val() >= 10) {
            $('.book-num-input').val(10);
        }
    })
    $('.book-num-input').keyup(function() {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
    $('.book-num-input').blur(function() {
        if ($(this).val() == "") {
            $(this).val(1);
        }
        if (parseInt($(this).val()) >= 10) {
            $(this).val(10);
        }
        if (parseInt($(this).val()) <= 1) {
            $(this).val(1);
        }
    })
});