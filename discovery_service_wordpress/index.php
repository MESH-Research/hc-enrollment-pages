<?php
  $referer = parse_url( $_SERVER['HTTP_REFERER'] );
?>
<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page WordPress</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include( '../partials/css_js.php' ); ?>
</head>

<body>

  <div class="container full-width-container">
    <div class="row">
      <div class="twelve columns">

        <?php include('../partials/header.php'); ?>

        <div class="container">
          <div class="row">
            <div class="eight columns align-self-center">
              <h2 style="text-align: center;">Select your login method</h2>
              <p style="text-align: center;">Make sure you always sign in to the Commons using the same method.</p>
              <?php include('../partials/login_items.php'); ?>
            </div> <!-- /.eleven.columns -->
            <?php include('../partials/sidebar.php'); ?>
          </div> <!-- /.row -->

        </div> <!-- /.container -->

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
      </div> <!-- /.eleven.columns -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

  <?php include('../partials/footer.php'); ?>
</body>
</html>
