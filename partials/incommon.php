<div class="row">
	<div class="six columns align-self-center offset-by-three">
		<div class="section">
			<div class="container container_incommon_top" style="text-align:center;">
				<div id="idpSelect" style="display:inline-block;"></div>
				<script type="text/javascript">
					var humanitiesCommonsHiddenIdPs = [
						'<?php echo GOOGLE_GATEWAY; ?>',
						'<?php echo TWITTER_GATEWAY; ?>',
						'<?php echo HC_GATEWAY; ?>',
						'<?php echo LEGACY_MLA_GATEWAY; ?>',
						'<?php echo HC_ACCOUNT_CREATE_GATEWAY; ?>',
					];
					var humanitiesCommonsPreferredIdPs = [
						'<?php echo GOOGLE_GATEWAY; ?>',
						'<?php echo TWITTER_GATEWAY; ?>',
						'<?php echo HC_GATEWAY; ?>',
						'<?php echo LEGACY_MLA_GATEWAY; ?>',
					];
				</script>
				<script src="/lib/shibboleth-embedded-ds-1.2.0/json2.js" type="text/javascript" language="javascript"></script>
				<script src="/lib/shibboleth-embedded-ds-1.2.0/typeahead.js" type="text/javascript" language="javascript"></script>
				<script src="/lib/shibboleth-embedded-ds-1.2.0/idpselect_languages.js" type="text/javascript" language="javascript"></script>
				<script src="/lib/shibboleth-embedded-ds-1.2.0/idpselect_config.js" type="text/javascript" language="javascript"></script>
				<script src="/lib/shibboleth-embedded-ds-1.2.0/idpselect.js" type="text/javascript" language="javascript"></script>
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
		</div> <!-- /.section -->
	</div> <!-- /.six.columns -->
</div> <!-- /.row -->
