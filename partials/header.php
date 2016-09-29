<?php
  $host = explode( '.', $referer['host'] );
  $currentUrl = parse_url( $_SERVER['REQUEST_URI'] );
?>

<header id="customHeader">
  <div class="contentWidth">
    <?php

    //for now, lets only target the discovery_service_wordpress page
    if( $currentUrl['path'] == '/discovery_service_wordpress/index.php' ) :

    switch( $host[0] ) :
      case "mla" :
    ?>
    <h1><?php echo $host[0]; ?> Custom Site Title</h1>
    <div class="customElement"><?php echo $host[0]; ?> site element</div>
    <div class="customImage"><img src="/img/hc_mla_55.png" /></div>
    <?php
      break;
      case "ajs" :
    ?>
    <h1><?php echo $host[0]; ?> Custom Site Title</h1>
    <div class="customElement"><?php echo $host[0]; ?> site element</div>
    <div class="customImage"><img src="/img/hc_ajs_55.png" /></div>
    <?php break;
      case "aseees" :
    ?>
    <h1><?php echo $host[0]; ?> Custom Site Title</h1>
    <div class="customElement"><?php echo $host[0]; ?> site element</div>
    <div class="customImage"><img src="/img/hc_aseees_55.png" /></div>
    <?php
      break;
      default :
    ?>
    <h1>HC Custom Site Title</h1>
    <div class="customElement">HC site element</div>
    <div class="customImage"><img src="/img/double_hc_55.png" /></div>
    <?php
      break;
    endswitch;

    else :
    ?>
    <!-- example markup for your header field -->
    <h1>HC Custom Site Title</h1>
    <div class="customElement">HC site element</div>
    <div class="customImage"><img src="/img/double_hc_55.png" /></div>
    <?php endif; ?>
</header> <!-- /#customHeader -->

<nav id="row1" aria-label="user and platform menus">
  <div class="contentWidth">
    <div id="secondaryMenu" class="rightmenu"></div> <!-- /.secondaryMenu -->
  </div> <!-- /.contentWidth -->
</nav> <!-- /#row1 -->
