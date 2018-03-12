$(document).ready(function() {
    $("#button-scroll").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $("#info-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $("#info-arr").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $("#reg-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#register-zone").offset().top
        }, 2000);
    });

    $("#sub-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#register-zone").offset().top
        }, 2000);
    });

    $( '.inputfile' ).each( function()
    {
        var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

        $input.on( 'change', function( e )
        {
            var fileName = '';

            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                $label.find( 'span' ).html( fileName );
            else
                $label.html( labelVal );
        });

        // Firefox bug fix
        $input
            .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
            .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
    });

    $( ".mobile-menu" ).hide();

    $("#close-mobile").click(function() {
        $( ".mobile-menu" ).toggle( "slide", {direction: 'right'} );
    });

    $("#open-mobile").click(function() {
        $( ".mobile-menu" ).toggle( "slide", {direction: 'right'} );
    });
});