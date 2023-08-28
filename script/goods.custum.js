const swiper = new Swiper('.swiper', {
    // If we need pagination
    pagination: { // 호출(pager) 여부
        el: ".swiper-pagination", //버튼을 담을 태그 설정
        clickable: true, // 버튼 클릭 여부
    },
    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    autoplay:{delay:1000,
    disableOnInteraction: false,},
    loop:false,
    loopAdditionalSlides : 1,
    slidesPerView : 5,
    speed:800,
    pagination : false,
});

