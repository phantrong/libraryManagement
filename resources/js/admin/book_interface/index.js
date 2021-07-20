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
    
    let listImg = $('.list-img');
    let listImgMax = $('.list-img-max');
    let mainImg = $('.book-main-img img');
    let sliderMainImg = $('.slider-view-main img');
    function load(cur) {
        listImg.removeClass('active');
        listImgMax.removeClass('active');
        cur.addClass('active');
        mainImg.attr('src',cur.attr('src'));
        sliderMainImg.attr('src',cur.attr('src'));
    }
    listImg.each(function(index) {
        $(this).click(function() {
            load($(this));
            listImgMax[index].classList.add('active');
        })
    })
    listImgMax.each(function(index) {
        $(this).click(function() {
            load($(this));
            listImg[index].classList.add('active');
        })
    })

    $('.next').click(function() {
        let curIndex = listImgMax.index($('.list-img-max.active'));
        listImgMax.removeClass('active');
        curIndex += 1;
        if(curIndex >= listImgMax.length) {
            curIndex = 0;
        }
        load($(listImgMax[curIndex]));
        listImg[curIndex].classList.add('active');
    })
    $('.prev').click(function() {
        let curIndex = listImgMax.index($('.list-img-max.active'));
        listImgMax.removeClass('active');
        curIndex -= 1;
        if(curIndex < 0) {
            curIndex = listImgMax.length-1;
        }
        load($(listImgMax[curIndex]));
        listImg[curIndex].classList.add('active');
    })

    mainImg.click(function(){
        $('.slider-view-img').fadeIn(500);
    })
    $('.close').click(function() {
        $('.slider-view-img').fadeOut(500);
    })
});