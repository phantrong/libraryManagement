require('./slider')
require('./scroll_smooth')

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


    $('#contactForm').submit(function() {
        alert('Gửi thành công');
        $('.form-input').val("");
        return false;
    });
});
