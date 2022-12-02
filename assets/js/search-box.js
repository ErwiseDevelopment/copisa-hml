(function() {
    const icon = document.querySelector( '.js-search-icon' )
    const box = document.querySelector( '.js-search-box' )
    const close = document.querySelector( '.js-search-close' ) 

    icon.addEventListener( 'click', function() {
        box.classList.add( 'is-active' )
    })

    close.addEventListener( 'click', function() {
        box.classList.remove( 'is-active' )
    })
})()