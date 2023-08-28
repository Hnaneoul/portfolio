const swiper = new Swiper('.swiper', {
    // If we need pagination
    pagination: {
    el: '.swiper-pagination',
    },
    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    autoplay:{delay:2000,
    disableOnInteraction: false,},
    slidesPerView : 1,
    centeredSlides: true,
    loop:true,
    loopAdditionalSlides : 1,
});

