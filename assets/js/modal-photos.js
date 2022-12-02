(function() {
    if( document.querySelector( '.js-modal-photos' ) ) {
        const photos = document.getElementsByClassName( 'js-photos' )
        const modal = document.querySelector( '.js-modal-photos' )
        const closes = document.getElementsByClassName( 'js-modal-photos-close' )
        const html = document.querySelector( 'html' )
        
        for( const i of photos ) {
            i.addEventListener( 'click', function() {
                modal.classList.add( 'is-active' )
                html.classList.add( 'overflow-hidden')

                const swiperPhotos = new Swiper( '.js-swiper-photos', {
                    initialSlide: this.dataset.value,

                    navigation: {
                        prevEl: '.js-swiper-button-prev-photos',
                        nextEl: '.js-swiper-button-next-photos',
                    }
                })
            })
        }

        for( const j of closes ) {
            j.addEventListener( 'click', function() {
                modal.classList.remove( 'is-active' )
                html.classList.remove( 'overflow-hidden' )
            })
        }
    }
})()