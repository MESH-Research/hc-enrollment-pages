<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/skeleton.css" />
<link rel="stylesheet" type="text/css" href="/css/discovery_service_01.css" />
<link rel="stylesheet" type="text/css" href="/lib/shibboleth-embedded-ds-1.2.0/idpselect.css" />
<?php include('analytics.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/lib/js-cookie/src/js.cookie.js"></script>
<?php
  $url = parse_url( $_SERVER['REQUEST_URI'] );
  $path = pathinfo( $url['path'] );
  if( $path['dirname'] == '/discovery_service_enrollment' ) :
?>
<script type="text/javascript" src="jquery.countdown360.js" charset="utf-8"></script>
<?php endif; ?>
<!--<link rel='stylesheet' type='text/css' href="http://registry-dev.commons.mla.org/registry/css/comanage.css" />-->
<link rel="stylesheet" type="text/css" media="screen" href="/css/global.css" />

<script type='text/javascript' src='//use.typekit.net/bgx6tpq.js'></script>
<script type='text/javascript'>
     try{Typekit.load();}catch(e){};
</script>

<script type="text/javascript">
$(document).ready(function() {

var url = window.location.href.split('/');

$('#idpSelectIdPSelector #idpSelectIdPEntryTile').hide();
//$('.IdPSelectPreferredIdPButton').hide();

function display_default_login() {
    $('#idpSelectIdPSelector #idpSelectIdPEntryTile').hide(); 
    //$('#idpSelectIdPSelector .IdPSelectautoDispatchTile').hide();
    $('.container_incommon_top .button_container').hide();

    $('.login-items-desktop').show();
    $('.titles_container').show();
}
//if( $('.IdPSelectTextDiv').match('\Log in\ig')
$('.IdPSelectTextDiv').empty();

if( $('.IdPSelectIdPImg').length >= 1 ) { 

$('.IdPSelectIdPImg').each(function(k,v) {

//console.log($(v).attr('alt'));
if( $(this).attr('alt') == 'Legacy MLA Login' ) {
//console.log('in legacy mla login');
$(v).attr('src', '/img/new_logos_fall_17/legacy_mla_fall_17.png');
//$(v).attr('src', '/img/new_logos_fall_17/hc_favicon_fall_17.png');

}

if( $(v).attr('alt') == 'HC Login' ) {

$(v).attr('src', '/img/new_logos_fall_17/hc_favicon_fall_17.png');
} 

});
}

//var reg = new RegExp('\Log in\ig');
//console.log(reg.test($('.IdPSelectTextDiv').text()));

//if( url[3] == 'discovery_service_wordpress' ) {

  if( $('.container_incommon_top').find('.IdPSelectPreferredIdPImg').is(':visible') ) {

    $('.login-items-desktop').hide();
    $('.titles_container').hide();
    $('.container_incommon_top .linked_login_container').show();

$('#idpSelectIdPSelector #idpSelectIdPEntryTile').hide();
 
  }

  $('.uni_cred_login').on('click', function(event) {

    event.preventDefault();
    $('.login-items-desktop').hide();
    $('.titles_container').hide();

$('.IdPSelectPreferredIdPButton').show();
    $('#idpSelectIdPSelector #idpSelectIdPEntryTile').show(); 
    //$('#idpSelectIdPSelector .IdPSelectautoDispatchTile').show();
    $('.container_incommon_top .button_container').show();

  });

  $('.container_incommon_top .button_container').on('click', function(event) {
    
    event.preventDefault();

    display_default_login();   
$('.IdPSelectPreferredIdPButton').hide();
  });

//}

   $('.linked_login_container').on('click', function(event) {

     event.preventDefault();

     display_default_login();
     $(this).hide();

     if( $('.container_incommon_top .IdPSelectPreferredIdPButton').length == 1 ) {
       $('.container_incommon_top .IdPSelectPreferredIdPButton').hide();
     }        

$('.IdPSelectPreferredIdPButton').hide();

  });

  /*if( $('#saml_idp').data('saml-idp') && $('#cakephp').data('cakephp') ) {
     display_default_login();
     $('.IdPSelectPreferredIdPButton').hide();
     $('.linked_login_container').hide();
  }*/

//}

//console.log( window.location.href.split('/') );

if( Cookies.get('_saml_idp') && Cookies.get('_saml_idp').split(' ').length > 1 ) {
   //Cookies.set("last_login", "an Institutional account");
} 

  $('.login-items-desktop a', $(this)).on('click', function(event) {
    //event.preventDefault();
    //Cookies.set("last_login", $(this).data('login'));
  });

});
</script>
