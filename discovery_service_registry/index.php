<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page for Registry</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include('../partials/css_js.php'); ?>
</head>

<body class="discovery-service-registry">

  <div class="container container_incommon full-width-container mobile-container">
    <div class="row">
      <div class="twelve columns">

        <!--<div class="flash_msg">
          <p>Thank you for registering! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
        </div>--> <!-- /.flash_msg -->

        <?php include('../partials/header.php'); ?>

          <div class="container container_incommon">
            <div class="row">
              <div class="eight columns align-self-center login_registry_text column-content offset-by-two">
                <!--<h3>Thank you for registering!</h3>-->

                <?php if( $check_saml_cake['CAKEPHP'] == true && $check_saml_cake['_saml_idp'] == true ) : ?>
                <h3>Select your new log-in method</h3>
                <?php else : ?>
                <h3>Select your log-in method</h3>
                <p style="text-align: center;font-weight:bold">Make sure you always sign in to the Commons using the same method.</p>
                <?php endif; ?>

		            <?php include('../partials/login_items.php'); ?>
              </div>
              <?php include('../partials/sidebar.php'); ?>
            </div> <!-- /.row -->

          </div> <!-- /.container -->

<?php
//only triggers after user accepts email invite
if( $check_saml_cake['CAKEPHP'] == true && $check_saml_cake['_saml_idp'] == false ) {
  //require_once "../partials/incommon.php";
}

include('../partials/footer.php');
?>

</body>
</html>
