<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page for Registry</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include('../partials/css_js.php'); ?>
</head>

<body class="discovery-service-registry">

  <div class="container full-width-container">
    <div class="row">
      <div class="twelve columns">
        <!--<div class="flash_msg">
          <p>Thank you for registering! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
        </div>--> <!-- /.flash_msg -->

        <?php include('../partials/header.php'); ?>

          <div class="container">
            <div class="row">
              <div class="eleven columns align-self-center login_registry_text">
                <h2>Thank you for registering!</h2>
                <h2>Select your login method</h2>
                <p>Please choose the login method you would prefer to use to login to the Commons.</p>
              </div> <!-- /.ten.columns -->
            </div> <!-- /.row -->

            <?php include('../partials/login_items.php'); ?>

          </div> <!-- /.container -->

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
      </div> <!-- /.eleven.columns -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

</body>
</html>
