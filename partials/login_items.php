<?php
require_once "../env.php";

/**
 * Outputs URL based off entity ID
 * @param  string $entityId  base url to use
 * @return string           concatinated URL to be used
 */
function outputUrl( $entityId, $newLogin = false ) {

  // Get the 'return' URL included by the SP from the query string.
  // TODO check for array key before trying to access
  // e.g.
  // $returnUrl = array_key_exists('return', $_GET) ? $_GET["return"] : '';
  $returnUrl = $_GET["return"];

  //lets check if the user is trying to create a new login
  if( $newLogin == true ) {

    // Need to URL encode the entityID before adding it as a query string
    // parameter to the link.
    $discoveryUrlEncoded = rtrim( $returnUrl, '/' ) . '&entityID=' . urlencode( $entityId );

    // URL encode the discoveryURL to make it a query string parameter for
    // the HumanitiesCommonsIdpEnroller provision action
    return REGISTRY_SERVER . '/registry/humanities_commons_idp_enroller/humanities_commons_idp_enroller_accounts/provision?target=' . urlencode( $discoveryUrlEncoded );

  } else {
    // Need to URL encode the entityID before adding it as a query string
    // parameter to the link.
    return $returnUrl . '&entityID=' . urlencode($entityId);
  }
}

?>

<!-- login items desktop -->
<div class="login-items-desktop">

  <div class="row with-flex">

    <div class="one-half column align-self-center">
      <a href="<?php echo outputUrl( TWITTER_GATEWAY ); ?>">
        <img class="hc-signin" src="/img/twitter_signin3.png" />
      </a>
    </div> <!-- /.one-half.column -->

    <div class="one-half column align-self-center google-logo">
      <a href="<?php echo outputUrl( GOOGLE_GATEWAY ); ?>">
        <img src="/img/google_button.png" />
      </a>
    </div> <!-- /.one-half.column -->

    <?php /* need to change classes 'one-half' back to 'one-third' above when restoring this block
    <div class="one-third column align-self-center">
      <a href="">
      <img src="/img/orcid_128x128.png"></img>
      </a>
    </div>
    */ ?>
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">

      <div class="one-half column align-self-center" style="display:inherit">
        <a href="<?php echo outputUrl( HC_GATEWAY ); ?>">
          <img class="hc-signin" src="/img/hc_signin3.png" />
        </a>
      </div> <!-- /.eleven.columns -->

    <div class="one-half column align-self-center">
      <a href="<?php echo outputUrl( LEGACY_MLA_GATEWAY ); ?>">
        <img class="legacy_mla" src="/img/mla_signin3.png" />
      </a>
    </div> <!-- /.one-half.column -->

    <?php /* need to change classes 'one-half' back to 'one-third' above when restoring this block
      <div class="one-third column align-self-center">
      <a href="">
      <img src="/img/orcid_128x128.png"></img>
      </a>
    </div> */ ?>
  </div> <!-- /.row.with-flex -->

</div> <!-- /.login-items-desktop -->

<!-- end login-items-desktop -->

<!-- login-items-mobile -->

<div class="six columns login-items-mobile offset-by-three">

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <a href="<?php echo outputUrl( TWITTER_GATEWAY ); ?>">
        <img class="hc-signin" src="/img/twitter_signin3.png" />
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <a href="<?php echo outputUrl( GOOGLE_GATEWAY ); ?>">
        <img src="/img/google_button.png" />
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <a href="<?php echo outputUrl( HC_GATEWAY ); ?>">
        <img class="hc-signin" src="/img/hc_signin3.png" />
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <a href="<?php echo outputUrl( LEGACY_MLA_GATEWAY ); ?>">
        <img class="legacy_mla" src="/img/mla_signin3.png" />
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

</div> <!-- /.login-items-mobile -->

<!-- end login-items-mobile -->

  <?php
  //we only want the user to see this option when in the discovery_service_registry enrollment flow
  if( $registryUrl['dirname'] == '/discovery_service_registry' ) : ?>

  <div class="row create_new_login">
    <div class="eleven columns align-self-center u-cf">
        <br />
        <br />
        <h5>Don't see your log-in server?</h5>
        <p>Or <a href="<?php echo outputUrl( HC_ACCOUNT_CREATE_GATEWAY, true ); ?>">click here to create a new Humanities Commons log-in</a>.</p>
      </div> <!-- /.eight.column -->

    </div> <!-- /.create_new_login -->

  <?php endif; ?>
