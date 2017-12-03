<script type='text/javascript' src='//use.typekit.net/bgx6tpq.js'></script>
<script type='text/javascript'>
     try{Typekit.load();}catch(e){};
</script>

<script type='text/javascript'>
jQuery( document ).ready( function( $ ) {
    $('head').append('<meta name="viewport" content="width=device-width" />');
    //new 3.1 UI login button url change
    $( 'body.pages.display #top-menu #user-menu a#login' ).attr( 'href',
'https://registry.hcommons-dev.org/Shibboleth.sso/Login?target=https%3A%2F%2Fregistry.hcommons-dev.org%2Fregistry%2Fauth%2Flogin%2F&discoveryURL=https%3A%2F%2Fregistry.hcommons-dev.org%2Fdiscovery_service_registry_only%2Findex.php' );

    $( 'body.pages.display #main #content-inner #fpDashboard #welcome-login a#welcome-login-button' ).attr( 'href',
'https://registry.hcommons-dev.org/Shibboleth.sso/Login?target=https%3A%2F%2Fregistry.hcommons-dev.org%2Fregistry%2Fauth%2Flogin%2F&discoveryURL=https%3A%2F%2Fregistry.hcommons-dev.org%2Fdiscovery_service_registry_only%2Findex.php' );

    } );
</script>

<script type="text/javascript">
$(function() {
if( $('.pages').find('.i-am-new').length ) {
    $('body').addClass('duplicate-error-message');
    //$('#main').append( $('<div />', { id: 'newContainer' }).append( $("<span />").append(  $('<a />', { href: "https://registry.hcommons-dev.org/discovery_service_registry" } ).append( $("<img />", { src: "/img/hub_graphic_large_nov10_1.svg", width: "100%" } ) ) ) ) );
}
});
</script>