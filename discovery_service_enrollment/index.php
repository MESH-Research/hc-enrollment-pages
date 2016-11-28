<html lang="en">
<head>
  <title>Humanities Commons Draft IdP Discovery Page for Enrollment</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
  <?php include('../partials/css_js.php'); ?>
</head>

<body class="discovery-service-enrollment">
  <script>

  // Base64 decode the IdP entityID.
  //
  // Copied from Shibboleth Embedded Discovery Service source.
  var base64Decode = function(input) {
        var output = '', chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        var base64chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';

        // Remove all characters that are not A-Z, a-z, 0-9, +, /, or =
        var base64test = /[^A-Za-z0-9\+\/\=]/g;
        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, '');

        do {
            enc1 = base64chars.indexOf(input.charAt(i++));
            enc2 = base64chars.indexOf(input.charAt(i++));
            enc3 = base64chars.indexOf(input.charAt(i++));
            enc4 = base64chars.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

            chr1 = chr2 = chr3 = '';
            enc1 = enc2 = enc3 = enc4 = '';

        } while (i < input.length);

        return output;
    };

  // Examine the query string for a policy parameter with a particular
  // value that indicates that this invocation of the discovery service
  // is being used during a HC enrollment.
  function checkForEnrollmentPolicy() {
    var args = document.location.search.substring(1).split('&');
    var i;

    for(i=0; i < args.length; i++){
      var arg = args[i].split('=');
      if(arg.length == 2) {
        if((arg[0] == 'policy') && (arg[1] == 'urn:mla.org:SAML:profile:SSO:idp-discovery-protocol:commons_enrollment')) {
          return true;
        }
      }
    }

    return false;
  }

  // Look for and return an array of IdP entityIDs as stored in
  // the standard _saml_idp cookie that is populated by the
  // Shibboleth SAML service provider used to protect the
  // COmanage registry. The service provider populates the
  // cookie with IdPs that are successfully used by the browser
  // in time order so that the last value in the array is the
  // most recently used IdP.
  function checkForIdPCookie() {
    var args = document.cookie.split(';');
    var i;

    for(i=0; i < args.length; i++) {
      var arg=args[i].split('=');
      if(arg.length == 2) {
        if((arg[0].trim() == '_saml_idp') && (arg[1].length > 0)) {
          return decodeIdPCookie(arg[1]);
        }
      }
    }

    return false;
  }

  // Take the cookie value from the _saml_idp cookie and
  // return an ordered array of IdP entityIDs. The last
  // entityID in the array is the most recently used IdP.
  //
  // Copied from Shibboleth Embedded Discovery Service source.
  function decodeIdPCookie(cookieValues) {
    var userSelectedIdPs = [];
    var j;

    cookieValues = cookieValues.replace(/^\s+|\s+$/g, '');
    cookieValues = cookieValues.replace('+','%20');
    cookieValues = cookieValues.split('%20');
    for(j=cookieValues.length; j > 0; j--){
        if (0 === cookieValues[j-1].length) {
            continue;
        }
        var dec = base64Decode(decodeURIComponent(cookieValues[j-1]));
        if (dec.length > 0) {
            userSelectedIdPs.push(dec);
        }
    }

    return userSelectedIdPs;

  }

  // Parse the return parameter from the query string so that
  // we can compute the URL to which we will redirect the browser.
  function getReturnUrl() {
    var args = document.location.search.substring(1).split('&');
    var i;

    for(i=0; i < args.length; i++){
      var arg = args[i].split('=');
      if(arg.length == 2) {
        if((arg[0] == 'return') && (arg[1].length > 0)) {
          return decodeURIComponent(arg[1].trim());
        }
      }
    }

    return false;
  }

  // On load check for an enrollment policy in the query parameter
  // string that indicates this invocation of the discovery service
  // is being used as part of the enrollment. If found attempt to get
  // the last used IdP from the _saml_idp cookie set by the Shibboleth
  // SAML service provider. If entityID is found then parse out
  // the return URL and compute the redirect URL and append the
  // URL encoded entityID as the value to the entityID parameter.
  // Then show the waiting message and redirect after 15 seconds.
  //
  // If there is no enrollment policy or the cookie or entityID
  // cannnot be found then display a static discovery page
  // to let the user manually click to choose. This can happen
  // for various reasons and should be available as a fallback
  // so as to not strand the user if there is a problem.
  $( document ).ready(function() {
    if(checkForEnrollmentPolicy()){
      var entityID = checkForIdPCookie().pop();
      if (entityID) {
        var returnUrl = getReturnUrl();
        var targetUrl = returnUrl + '&entityID=' + encodeURIComponent(entityID);

        // Display the message user will see during pause.
        $('#waiting').show();

        // Redirect the browser after 15 seconds.
        setTimeout(function() { window.location = targetUrl; }, 15000);
        return;
      }
    }

    // If we get here show the elements that allow a user to manually
    // click and continue the flow.
    $('#thanks').show();
    $('#choose').show();

    return;
  });
  </script>

<?php include('../partials/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="eleven columns">

      <!-- This div is shown during the pause for 15 seconds. -->
      <div class="section" id="waiting" style="display:none;">
        <div class="container">
          <div class="row">
            <h1>You are registered!</h1>
            <p>We are completing the final registration details now.</p>
            <p>You will be automatically redirected to the Commons in 15 seconds...</p>
            <p></p>
          </div>
          <div class="row" id="countdown"></div>
          <script type="text/javascript" charset="utf-8">
            $('#countdown').countdown360({
              radius    : 60,
              seconds   : 15,
              fillStyle : '#000',
              strokeStyle: '#006650',
              fontColor: '#fff',
              autostart : false
            }).start()
          </script>
        </div> <!-- /.container -->
      </div> <!-- /#waiting -->

      <!-- This div is shown if the policy parameter and/or the entityID
           is not determined so that the user can manually click to
           continue the flow. -->
      <div class="section" id="thanks" style="display:none;">
        <div class="container">
          <div class="row">
            <h2>Thank you for registering!</h2>
            <h2>Select your login method</h2>
            <p>Please choose the login method you would prefer to use login to the Commons.</p>
          </div>
        </div> <!-- /.container -->
      </div> <!-- /#thanks -->

      <!-- This div is shown if the policy parameter and/or the entityID
           is not determined so that the user can manually click to
           continue the flow. -->
      <div class="section" id="choose" style="display:none;">
        <div class="container">
          <div class="row">
            <div class="eleven columns align-self-center column-content">
              <?php include('../partials/login_items.php'); ?>
            </div> <!-- /.eight.columns -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </div> <!-- /#choose -->

    <?php include('../partials/sidebar.php'); ?>

    </div> <!-- /.eleven.columns -->
  </div> <!-- /.row -->
</div> <!-- /.container -->
<?php include('../partials/footer.php'); ?>

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
