/* services */
const swiperSpecialContent = new Swiper( '.js-swiper-special-content', {
    breakpoints: {
        320: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    },

    pagination: {
        el: '.js-swiper-pagination-special-content',
    },
});

//videos
const swiperVideos = new Swiper( '.js-swiper-videos', {
    navigation: {
        prevEl: '.js-swiper-button-prev-videos',
        nextEl: '.js-swiper-button-next-videos'
    }
})

/* our communities */
const swiperOurCommunitiesImage = new Swiper( '.js-swiper-our-communities-image', {
    navigation: {
        prevEl: '.js-swiper-button-prev-our-communities',
        nextEl: '.js-swiper-button-next-our-communities'
    }
});

//gallery
const swiperGallery = new Swiper( '.js-swiper-gallery', {
    slidesPerView: 4,
   
    grid: {
        rows: 2,
    },

    spaceBetween: 30,
    
    // navigation: {
    //     prevEl: '.js-swiper-button-prev-gallery',
    //     nextEl: '.js-swiper-button-next-gallery'
    // }
});

const swiperOurCommunities = new Swiper( '.js-swiper-our-communities', {
    navigation: {
        prevEl: '.js-swiper-button-prev-our-communities',
        nextEl: '.js-swiper-button-next-our-communities'
    }
});

const swiperTestimonials = new Swiper( '.js-swiper-testimonials', {
    navigation: {
        prevEl: '.js-swiper-button-prev-testimonials',
        nextEl: '.js-swiper-button-next-testimonials'
    }
});

const swiperTestimonialsPhotos = new Swiper( '.js-swiper-testimonials-photos', {
    navigation: {
        prevEl: '.js-swiper-button-prev-testimonials',
        nextEl: '.js-swiper-button-next-testimonials'
    }
});

const swiperPartners = new Swiper( '.js-swiper-partners', {
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        992: {
            slidesPerView: 4,
        }
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-partners',
        nextEl: '.js-swiper-button-next-partners'
    }
})

/* testemonials */
// const swiperTestemonials = new Swiper('.swiper-container-testemonials', {
//     navigation: {
//         nextEl: '.swiper-button-next-testemonials',
//         prevEl: '.swiper-button-prev-testemonials',
//     },

//     pagination: {
//         el: '.swiper-pagination-testemonials',
//     },
// });