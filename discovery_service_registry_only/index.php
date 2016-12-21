<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page for Registry</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include('../partials/css_js.php'); ?>
</head>

<body class="discovery-service-registry">

  <!--<div class="flash_msg">
    <p>Thank you for registering! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
  </div>--> <!-- /.flash_msg -->

  <?php include('../partials/header.php'); ?>

  <div class="container container_incommon">
    <div class="row">
      <div class="eight columns align-self-center">
        <h2 style="text-align: center;">Select your log-in method</h2>
        <p style="text-align: center;font-weight:bold">Make sure you always sign in to the Commons using the same method.</p>
        <?php include('../partials/login_items.php'); ?>
      </div> <!-- /.eleven.columns -->
      <?php include('../partials/sidebar.php'); ?>
    </div> <!-- /.row -->

  </div> <!-- /.container -->

<?php include('../partials/footer.php'); ?>

</body>
</html>
