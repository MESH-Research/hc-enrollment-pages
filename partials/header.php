<?php
  // TODO if $referer is not an array that contains 'host' (like if browser didn't send a referer), need a fallback.
  // check if array key exists, and have some fallback in case it doesn't
  $host = explode( '.', $referer['host'] );
  $currentUrl = parse_url( $_SERVER['REQUEST_URI'] );
  $registryUrl = pathinfo( $currentUrl['path'] );

  //lets check for the after_submission page and allow the logos to change according to society for that enrollment flow
  if( fnmatch( 'index-*.php', $registryUrl['basename'] ) && $registryUrl['dirname'] == '/after_submission' ) {

    $registryUrlSociety = explode( '-', $registryUrl['filename'] );
    $host[0] = $registryUrlSociety[1];

  } else {

    $registryUrlSociety = false;

  }

?>

<header id="customHeader">
  <div class="contentWidth">
    <?php

    //for now, lets only target the discovery_service_wordpress page
    if( $registryUrl['dirname'] == '/discovery_service_wordpress' ) :

    switch( $host[0] ) :
      case "mla" :
    ?>
    <h1><?php echo strtoupper( $host[0] ); ?> Login</h1>
    <div class="customImage"><img src="/img/hc_mla_55.png" /></div>
    <?php
      break;
      case "ajs" :
    ?>
    <h1><?php echo strtoupper( $host[0] ); ?> Login</h1>
    <div class="customImage"><img src="/img/hc_ajs_55.png" /></div>
    <?php break;
      case "aseees" :
    ?>
    <h1><?php echo strtoupper( $host[0] ); ?> Login</h1>
    <div class="customImage"><img src="/img/hc_aseees_55.png" /></div>
    <?php
      break;
      default :
    ?>
    <h1>HC Login</h1>
    <div class="customImage"><img src="/img/double_hc_55.png" /></div>
    <?php
      break;
    endswitch;

    else :
    ?>
    <!-- example markup for your header field -->
    <h1>Membership</h1>
    <div class="customImage"><img src="/img/double_hc_55.png" /></div>
    <?php endif; ?>
</header> <!-- /#customHeader -->

<nav id="row1" aria-label="user and platform menus">
  <div class="contentWidth">
    <div id="secondaryMenu" class="rightmenu"></div> <!-- /.secondaryMenu -->
  </div> <!-- /.contentWidth -->
</nav> <!-- /#row1 -->
