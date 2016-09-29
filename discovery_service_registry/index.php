<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page for Registry</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="/css/skeleton.css" />
  <link rel="stylesheet" type="text/css" href="/css/discovery_service_01.css" />
  <link rel="stylesheet" type="text/css" href="idpselect.css" />
  <link rel="stylesheet" type="text/css" href="/css/global.css" />
</head>

<body class="discovery-service-registry">

  <pre>
    <?php var_dump( $_SESSION ); ?>
  </pre>

  <pre>
    <?php var_dump( $_SERVER ); ?>
  </pre>

  <header id="customHeader">
    <div class="contentWidth">
      <!-- example markup for your header field -->
      <h1>MLA Custom Site Title</h1>
      <div class="customElement">MLA site element</div>
      <div class="customImage"><img src="https://hcommons-dev.org/app/uploads/2016/09/hc_mla_65px.png" /></div>
  </header> <!-- /#customHeader -->

  <nav id="row1" aria-label="user and platform menus">
    <div class="contentWidth">
      <div id="secondaryMenu" class="rightmenu"></div> <!-- /.secondaryMenu -->
    </div> <!-- /.contentWidth -->
  </nav> <!-- /#row1 -->

  <div class="section">
    <div class="container">
      <div class="row">
        <h2>Thank you for registering!</h2>
        <h2>Select your login method</h2>
          <p>Please choose the login method you would prefer to use to login to the Commons.</p>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row with-flex">
        <div class="one-half column align-self-center" style="display:none">
          <?php
            // Get the 'return' URL included by the SP from the query string.
            $returnUrl = $_GET["return"];

            // The entityID for the HC alpha test IdP
            $entityID = 'https://hcommons-test.commons.mla.org/idp/shibboleth';

            // Need to URL encode the entityID before adding it as a query string
            // parameter to the link.
            echo '<a href="' . $returnUrl . '&entityID=' . urlencode($entityID) . '">';
          ?>
          <img class="hc-signin" src="/img/hc_signin2_360.png"></img>
          </a>
        </div>
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
          <img src="/img/google.png"></img>
          </a>
        </div>
<?php /* need to change classes 'one-half' back to 'one-third' above when restoring this block
        <div class="one-third column align-self-center">
          <a href="">
          <img src="/img/orcid_128x128.png"></img>
          </a>
        </div>
*/ ?>
      </div>


      <div class="row with-flex create_new_login">
        <div class="eight column align-self-center">
            <?php
              // Get the 'return' URL included by the SP from the query string.
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
          </div>

        </div>
      </div>


    </div>
  </div>
  <?php
    include('../partials/sidebar.php');
    include('../partials/footer.php');
  ?>

<?php /*
  <div class="section">
    <div class="container" style="text-align:center;">
      <div id="idpSelect" style="display:inline-block;"></div>
      <script src="idpselect_config.js" type="text/javascript" language="javascript"></script>
      <script src="idpselect.js" type="text/javascript" language="javascript"></script>
      <noscript>
        <!-- If you need to care about non javascript browsers you will need to
             generate a hyperlink to a non-js DS.

             To build you will need:
                 - URL:  The base URL of the DS you use
                 - EI: Your entityId, URLencoded.  You can get this from the line that
                   this page is called with.
                 - RET: Your return address dlib-adidp.ucs.ed.ac.uk. Again you can get
                   this from the page this is called with, but beware of the
                   target%3Dcookie%253A5269905f bit..

            < href=${URL}?entityID=${EI}&return=${RET}
         -->

        Your Browser does not support javascript. Please use
        <a href="http://federation.org/DS/DS?entityID=https%3A%2F%2FyourentityId.edu.edu%2Fshibboleth&return=https%3A%2F%2Fyourreturn.edu%2FShibboleth.sso%2FDS%3FSAMLDS%3D1%26target%3Dhttps%3A%2F%2Fyourreturn.edu%2F">this link</a>.

      </noscript>
    </div>
  </div>
*/ ?>


</body>
</html>
<?php session_destroy(); ?>
