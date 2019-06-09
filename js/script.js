( () => {

    const $ = jQuery;

    /**
     * Project hover effect
     */
    const projects  = $.find( '.project' );
    const opacity   = 0.5;

    $( projects ).each( function() {

        // On hover
        $( this ).hover( function() {

            // Fade all projects of same type
            if( $( this ).hasClass( 'project-code' ) ) {
                $( '.project-code' ).css( 'opacity', opacity );
            } else if( $( this ).hasClass( 'project-art' ) ) {
                $( '.project-art' ).css( 'opacity', opacity );
            }

            // Preserve this project's opacity
            $( this ).css( 'opacity', 1 );

        // Off hover
        }, function () {
            $( projects ).css( 'opacity', 1 );
        });
    });

})();