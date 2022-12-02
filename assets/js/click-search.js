(function() {
    if( document.querySelector( '.js-search-form' ) && document.querySelector( '.js-search-submit' ) ) {
        const form = document.querySelector( '.js-search-form' )
        const submit = document.querySelector( '.js-search-submit' )

        submit.addEventListener( 'click', function() {
            form.submit()
        })
    }
})()