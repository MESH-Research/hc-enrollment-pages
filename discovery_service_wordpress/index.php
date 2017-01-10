<?php
  // TODO check if referer exists before trying to access
  // e.g.
  // $referer = array_key_exists('HTTP_REFERER', $_SERVER) ? parse_url( $_SERVER['HTTP_REFERER'] ) : '';
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
              <h2 style="text-align: center;">Select your log-in method</h2>
              <?php if( isset( $host[0] ) && $host[0] == 'mla' ) : ?>
              <div class="row mla-text">
                <!-- add any text/div here -->
              </div> <!-- /.row.mla-text -->
              <?php endif; ?>
              <p style="text-align: center;font-weight:bold;">Make sure you always sign in to the Commons using the same method.</p>
              <?php include('../partials/login_items.php'); ?>
            </div> <!-- /.eleven.columns -->
            <?php include('../partials/sidebar.php'); ?>
          </div> <!-- /.row -->

        </div> <!-- /.container -->

<?php //require_once "../partials/incommon.php"; ?>
<?php include('../partials/footer.php'); ?>

</body>
</html>
