<html lang="en">
<head>
  <title>CAA Commons Email Verification</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include('../partials/css_js.php'); ?>
</head>

<body>

  <div class="container full-width-container">
    <div class="row">
      <div class="twelve columns">
        <?php include('../partials/header.php'); ?>

        <div class="container">
          <div class="row">
            <div class="ten columns align-self-center section_after_submission">
              <h2>Please verify your e-mail address.</h2>
              <p>Check your e-mail for a note with the subject "Activate your <?php echo strtoupper( $host[0] ); ?> Commons Account". In that message you will find a link. Please click on it so that we can verify your e-mail address and you can complete the registration process.</p>
            </div> <!-- /.eleven.columns -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
        <?php include('../partials/sidebar.php'); ?>
      </div> <!-- /.eleven.columns -->
    </div> <!-- /.row -->
  </div> <!-- /.container.full-width-container -->

  <?php include('../partials/footer.php'); ?>
</body>
</html>
