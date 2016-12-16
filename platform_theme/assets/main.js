<script type='text/javascript' src='//use.typekit.net/bgx6tpq.js'></script>
<script type='text/javascript'>
     try{Typekit.load();}catch(e){};
</script>

<script type='text/javascript'>
    jQuery( document ).ready( function( $ ) {
$('head').append('<meta name="viewport" content="width=device-width" />');
        $( 'body.pages.display #secondaryMenu.rightmenu div#logout span a' ).attr( 'href',
'https://registry-dev.commons.mla.org/Shibboleth.sso/Login?target=https%3A%2F%2Fregistry-dev.commons.mla.org%2Fregistry%2Fauth%2Flogin%2F&discoveryURL=https%3A%2F%2Fregistry-dev.commons.mla.org%2Fdiscovery_service_registry_only%2Findex.php' );
    } );
</script>

<script type="text/javascript">
$(function() {
if( $('.pages').find('.i-am-new').length ) {
    $('body').addClass('duplicate-error-message');
    $('#main').append( $('<div />', { id: 'newContainer' }).append( $("<span />").append(  $('<a />', { href: "https://registry-dev.commons.mla.org/discovery_service_registry" } ).append( $("<img />", { src: "/img/hub_graphic_large_nov10_1.svg", width: "100%" } ) ) ) ) );
}

if( $('body.humanities_commons_idp_enroller_co_petitions.collectIdentifier').length == 1 ) {
     $('#titleNavContainer').prepend( $('<p />').append( $('<h3 />').text('Please press the back button') ) );
}
});
</script>