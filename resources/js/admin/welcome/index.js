// click on slider
const slider = {
    prev: document.querySelector('.prev'),
    next: document.querySelector('.next'),
    slides: document.querySelectorAll('.mySlides'),
    curIndex: 0,
    nextSlide: function() {
        this.curIndex += 1;
        if (this.curIndex >= this.slides.length) {
            this.curIndex = 0;
        }
    },
    prevSlide: function() {
        this.curIndex -= 1;
        if (this.curIndex < 0) {
            this.curIndex = this.slides.length - 1;
        }
    },
    loadCurSlide: function() {
        if (document.querySelector('.mySlides.active')) {
            document.querySelector('.mySlides.active').classList.remove('active');
        }
        for (let i = 0; i < this.slides.length; i++) {
            if (i == this.curIndex) {
                this.slides[i].classList.add('active');
            }
        }
    },
    handle: function() {
        const _this = this;
        this.prev.onclick = function() {
            _this.prevSlide();
            _this.loadCurSlide();
        }
        this.next.onclick = function() {
            _this.nextSlide();
            _this.loadCurSlide();
        }
    },
    start: function() {
        this.loadCurSlide();
        this.handle();
    }
}
slider.start();

// back to top
const toTop = document.querySelector('.toTop');
window.onscroll = function() {
    if (window.pageYOffset > 300) {
        toTop.style.display = 'block';
    } else {
        toTop.style.display = 'none';
    }
}

// nav li đổi active khi scroll từng element
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.section');
    const navLia = document.querySelectorAll('.nav li a')
    let current = '';
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset + 200 >= sectionTop) {
            current = section.getAttribute('id');
        }
    })
    navLia.forEach((lia) => {
        lia.classList.remove('active');
        if (lia.classList.contains(current)) {
            lia.classList.add('active');
        }
    })
})

$(document).ready(function() {
    // scroll smooth
    $(".smooth").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                window.location.hash = hash;
            });
        }
    });

    // element trượt lên khi scroll xuống => animation
    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 300) {
                $(this).addClass("slide");
            }
        });
    });
});