

$( document ).ready( function(){
    setMaxWidth();
    $( window ).bind( "resize", setMaxWidth ); //Remove this if it's not needed. It will react when window changes size.

    function setMaxWidth() {
    $( "#logo" ).css( "maxWidth", ( $( window ).width() * 0.7 | 0 ) + "px" );
    }

});