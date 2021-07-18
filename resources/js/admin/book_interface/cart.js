
$(document).ready(function() {
    $('.overlay').click(function() {
        $('.cart-interface').hide(500);
    })
    $('.cart-out').click(function() {
        $('.cart-interface').hide(500);
    })
    $('.nav-cart-view').click(function() {
        $('.cart-interface').show(500);
    })
    const arrNum = $('.cart-num')
    $('.row-cart').each(function(index,cur) {
        $(this).find('> * > * >.btn-add').click(function() {
            arrNum[index].value = parseInt(arrNum[index].value) + 1;
            if(arrNum[index].value >= 10) {
                arrNum[index].value = 10;
            }
        })
        $(this).find('> * > * >.btn-sub').click(function() {
            arrNum[index].value = parseInt(arrNum[index].value) - 1;
            if(arrNum[index].value <= 1) {
                arrNum[index].value = 1;
            }
        })
        $(this).find('> * > * > .cart-num').keyup(function() {
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });
        $(this).find('> * > * > .cart-num').blur(function() {
            if ($(this).val() == "") {
                $(this).val(1);
                arrNum[index].value = 1;
            }
            if (parseInt($(this).val()) >= 10) {
                $(this).val(10);
                arrNum[index].value = 10;
            }
            if (parseInt($(this).val()) <= 1) {
                $(this).val(1);
                arrNum[index].value = 1;
            }
        })
        $(this).find('> * > .btn-remove').click(function() {
            $(this).parents('.row-cart').remove();
            if($('.row-cart').length == 0) {
                $('.no-cart').show();
                $('.form-submit').hide();
                $('.cart-info').hide();
            } else {
                $('.no-cart').hide();
                $('.form-submit').show();
                $('.cart-info').show();
            }
        })
    })
    
    $('.nav-cart-item').each(function(index) {
        $(this).find('> * > * > .nav-cart-item-remove').click(function(){
            $(this).parents('.nav-cart-item').remove();
            if($('.nav-cart-list-item').children().length === 0) {
                $('.nav-cart-list-item').hide();
                $('.nav-cart-heading').hide();
                $('.nav-cart-view').hide();
                $('.nav-no-cart').show();
            } else {
                $('.nav-cart-list-item').show();
                $('.nav-cart-heading').show();
                $('.nav-cart-view').show();
                $('.nav-no-cart').hide();
            }
        });        
    })

    /* function sumBook(){
        let sum = 0;
        for(let i = 0; i < arrNum.length; i++) {
            sum += parseInt(arrNum[i].value);
        }
        return sum.toString();
    }
    $('.cart-sum').find('span').text(sumBook()); */
});
