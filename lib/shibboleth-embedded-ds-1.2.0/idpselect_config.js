 
/** @class IdP Selector UI */
function IdPSelectUIParms(){

    // Adjust the following to fit into your local configuration
    //
    this.alwaysShow = true;          // If true, this will show results as soon as you start typing
    this.dataSource = '/Shibboleth.sso/DiscoFeed';   // Where to get the data from
    this.defaultLanguage = 'en';     // Language to use if the browser local doesnt have a bundle
    this.defaultLogo = '/lib/shibboleth-embedded-ds-1.2.0/blank.gif';  // Replace with your own logo
    this.defaultLogoWidth = 80;
    this.defaultLogoHeight = 60;
    this.defaultReturn = null;       // If non null, then the default place to send users who are not
                                     // Approaching via the Discovery Protocol for example
    //this.defaultReturn = "https://example.org/Shibboleth.sso/DS?SAMLDS=1&target=https://example.org/secure";
    this.defaultReturnIDParam = null;
    this.helpURL = '/registry/pages/public/help';
    this.ie6Hack = null;             // An array of structures to disable when drawing the pull down (needed to 
                                     // handle the ie6 z axis problem
    this.insertAtDiv = 'idpSelect';  // The div where we will insert the data
    this.maxResults = 10;            // How many results to show at once or the number at which to
                                     // start showing if alwaysShow is false
    this.myEntityID = null;          // If non null then this string must match the string provided in the DS parms
    this.preferredIdP = null;        // Array of entityIds to always show
    //this.preferredIdP = humanitiesCommonsPreferredIdPs;        // Array of entityIds to always show
    this.hiddenIdPs = null;          // Array of entityIds to delete
    //this.hiddenIdPs = humanitiesCommonsHiddenIdPs;          // Array of entityIds to delete

    this.ignoreKeywords = false;     // Do we ignore the <mdui:Keywords/> when looking for candidates
    this.showListFirst = false;      // Do we start with a list of IdPs or just the dropdown
    this.samlIdPCookieTTL = 2;     // in days
    this.setFocusTextBox = true;     // Set to false to supress focus 
    this.testGUI = false;

    this.autoFollowCookie = 'stickyIdPSelection';  //  If you want auto-dispatch, set this to the cookie name to use
    this.autoFollowCookieTTLs = [ 30 ]; // Cookie life (in days).  Changing this requires changes to idp_select_languages
    this.cookieDomain = '.' + HC_DOMAIN;

// not sure why this isn't already defined...
// TODO this doesn't work in fact.
    this.autoFollow = {};
    this.autoFollow.message = 'Always follows this selection';
    this.autoFollow.never = 'Never follow this selection';

    this.autoFollow.message = 'Always follows this selection';
    this.noWriteCookie = true;

    //
    // Language support. 
    //
    // The minified source provides "en", "de", "pt-br" and "jp".  
    //
    // Override any of these below, or provide your own language
    //
    this.langBundles = {
    'en': {
    //    'fatal.divMissing': '<div> specified  as "insertAtDiv" could not be located in the HTML',
    //    'fatal.noXMLHttpRequest': 'Browser does not support XMLHttpRequest, unable to load IdP selection data',
    //    'fatal.wrongProtocol' : 'Policy supplied to DS was not "urn:oasis:names:tc:SAML:profiles:SSO:idpdiscovery-protocol:single"',
    //    'fatal.wrongEntityId' : 'entityId supplied by SP did not match configuration',
    //    'fatal.noData' : 'Metadata download returned no data',
    //    'fatal.loadFailed': 'Failed to download metadata from ',
          'fatal.noparms' : 'No parameters to discovery session and no defaultReturn parameter configured',
    //    'fatal.noReturnURL' : "No URL return parameter provided",
    //    'fatal.badProtocol' : "Return request must start with https:// or http://",
          'idpPreferred.label': ' ',
          'idpEntry.label': 'Enter your university\'s name',
          'idpEntry.NoPreferred.label': 'Enter your university\'s name',
    //    'idpList.label': 'Or select your organization from the list below',
    //    'idpList.NoPreferred.label': 'Select your organization from the list below',
    //    'idpList.defaultOptionLabel': 'Please select your organization...',
    //    'idpList.showList' : 'Allow me to pick from a list',
    //    'idpList.showSearch' : 'Allow me to specify the site',
          'submitButton.label': 'Continue',
          'helpText': 'Help',
    //    'defaultLogoAlt' : 'DefaultLogo',
          'autoFollow.time0' : ' Remember for 30 Days',
          'autoFollow.message' : ' '
      }
    };

    //
    // The following should not be changed without changes to the css.  Consider them as mandatory defaults
    //
    this.maxPreferredIdPs = 3;
    this.maxIdPCharsButton = 33;
    this.maxIdPCharsDropDown = 58;
    this.maxIdPCharsAltTxt = 60;

    this.minWidth = 20;
    this.minHeight = 20;
    this.maxWidth = 115;
    this.maxHeight = 69;
    this.bestRatio = Math.log(80 / 60);
}
