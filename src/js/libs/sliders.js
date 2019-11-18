import Swiper from 'swiper';
import slick from 'slick-carousel';

function addSliders() {
    const clientsSlider = new Swiper('.clients__slider .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: '.clients__button--next',
            prevEl: '.clients__button--prev',
        },
        breakpoints: {
           768: {
                slidesPerView: 6,
            }
        }
    });
    const modelsSlider = new Swiper('.models__slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.models__button--next',
            prevEl: '.models__button--prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            991: {
                slidesPerView: 3
            }
        }
    });
    jQuery('.info__inner-wrapper--one').slick({
        slidesToShow: 3,
        infinite: false,
        adaptiveHeight: false,
        nextArrow: '.info__button--next-one',
        prevArrow: '.info__button--prev-one',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });
    jQuery('.info__inner-wrapper--two').slick({
        slidesToShow: 3,
        infinite: false,
        adaptiveHeight: false,
        nextArrow: '.info__button--next-two',
        prevArrow: '.info__button--prev-two',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });
    const swiper = new Swiper('.foto__slider .swiper-container', {
        slidesPerView: 4,
        loop: true,
        navigation: {
            nextEl: '.foto__button--next',
            prevEl: '.foto__button--prev',
        },
        breakpoints: {
            992: {
                slidesPerView: 5
            },
        }
    });


  
}

module.exports = addSliders;