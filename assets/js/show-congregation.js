(function() {
    if( document.querySelector( '.js-item-congregation' ) && document.querySelector( '.js-section-congregation' ) ) {
        const items = document.getElementsByClassName( 'js-item-congregation' )
        const sections = document.getElementsByClassName( 'js-section-congregation' )

        items[0].classList.add( 'is-active' )
        sections[0].classList.add( 'is-active' )
        
        for( const i of items) {
            i.addEventListener( 'click', function() {
                for( const j of items )
                    j.classList.remove( 'is-active' )

                for( const k of sections ) { 
                    if( this.dataset.value == k.dataset.value ) {
                        k.classList.add( 'is-active' )
                    } else {
                        k.classList.remove( 'is-active' )
                    }
                }

                this.classList.add( 'is-active' )
            })
        }
    }
})()