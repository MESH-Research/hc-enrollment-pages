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
  <?php include( '../partials/css_js.php' ); 
	include( '../env.php' );
  ?>
</head>

<body>

  <div class="container full-width-container">
    <div class="row">
      <div class="twelve columns">

        <?php include('../partials/header.php'); ?>

        <div class="container wordpress-container">
          <div class="row">
            <div class="seven columns align-self-center offset-by-two">
               <div class="titles_container">
                 <h5>Choose a login method you have already linked to your account</h5>
                 <p><a href="https://<?php echo constant('HC_DOMAIN'); ?>/remind-me/">Forgotten how you logged in?</a></p>
               </div><!-- /.titles_container -->

              <?php if( isset( $host[0] ) && $host[0] == 'mla' ) : ?>
              <div class="row mla-text">
                <!-- add any text/div here -->
              </div> <!-- /.row.mla-text -->
              <?php endif;
                include('../partials/login_items.php'); ?>
            </div> <!-- /.eleven.columns -->
            <?php include('../partials/sidebar.php'); ?>
          </div> <!-- /.row -->

        </div> <!-- /.container -->

<?php
require_once "../partials/incommon.php";
include('../partials/footer.php');
?>

</body>
</html>
