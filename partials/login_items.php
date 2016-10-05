<!-- login items desktop -->
<div class="login-items-desktop">

  <div class="row with-flex">

    <div class="one-half column align-self-center" style="margin-bottom: 10px;">
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the Twitter gateway
        $entityID = 'https://twitter-gateway.hcommons-dev.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="hc-signin" src="/img/twitter_signin.png"></img>
      </a>
    </div> <!-- /.one-half.column -->

    <div class="one-half column align-self-center">

      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the HC IdP that uses Google for authentication.
        $entityID = 'https://login-dev.commons.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img src="/img/google_button.png"></img>
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
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the HC alpha test IdP
        $entityID = 'https://hcommons-test.commons.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="hc-signin" src="/img/hc_signin2.png"></img>
      </a>
    </div> <!-- /.one-half.column -->

    <div class="one-half column align-self-center">
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the MLA IdP
        $entityID = 'https://mla-idp-dev.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="legacy_mla" src="/img/mla_signin_black_text.png"></img>
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
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the Twitter gateway
        $entityID = 'https://twitter-gateway.hcommons-dev.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="hc-signin" src="/img/twitter_signin.png"></img>
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the HC IdP that uses Google for authentication.
        $entityID = 'https://login-dev.commons.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img src="/img/google_button.png"></img>
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the HC alpha test IdP
        $entityID = 'https://hcommons-test.commons.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="hc-signin" src="/img/hc_signin2.png"></img>
      </a>
    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row.with-flex -->

  <div class="row with-flex">
    <div class="eleven columns align-self-center">
      <?php
        // Get the 'return' URL included by the SP from the query string.
        $returnUrl = $_GET["return"];

        // The entityID for the MLA IdP
        $entityID = 'https://mla-idp-dev.mla.org/idp/shibboleth';

        // Need to URL encode the entityID before adding it as a query string
        // parameter to the link.
        echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
      ?>
      <img class="legacy_mla" src="/img/mla_signin_black_text.png"></img>
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
        <?php
          //Get the 'return' URL included by the SP from the query string.
          $returnUrl = $_GET["return"];

          // The entityID for the HC alpha test IdP
          $entityID = 'https://hcommons-test.commons.mla.org/idp/shibboleth';

          // Need to URL encode the entityID before adding it as a query string
          // parameter to the link.
          $discoveryUrlEncoded = $returnUrl . '&entityID=' . urlencode($entityID);

          // URL encode the discoveryURL to make it a query string parameter for
          // the HumanitiesCommonsIdpEnroller provision action
          $url = 'https://registry-dev.commons.mla.org/registry/humanities_commons_idp_enroller/humanities_commons_idp_enroller_accounts/provision?target=' .  urlencode($discoveryUrlEncoded);
        ?>
        <br></br>
        <h5>Don't see your login server?</h5>
        <p>Click <a href="<?php echo "$url"; ?>">here to create a new login account with the Humanities Commons
        login server</a>. You can then use it login to Humanities Commons.</p>
      </div> <!-- /.eight.column -->

    </div> <!-- /.create_new_login -->

  <?php endif; ?>
