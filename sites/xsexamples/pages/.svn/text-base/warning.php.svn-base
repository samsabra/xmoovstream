<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	$doclink = (file_exists('../xsdocs/')) ? '<a href="/xsdocs/manuals/xmoovStream_Server_Documentation_EN.pdf" target="_blank">documentation</a>' : 'documentation';

?>

			<div class="warning">
				<h2 class="error">Warning:</h2>
				<?php if (!$mod_rewrite){ ?><p>The Apache <strong>rewrite_module</strong> could not be detected on your server. Accessing xmoovStream Server managed files require query strings without the Apache <strong>rewrite_module</strong> or other url rewriting equivalent.</p>
					<?php }  if ($mod_rewrite){ ?><p>One or more .htaccess files are missing, or missing the dot (.) at the beginning of the file name.<br/>You will not be able to use nice urls. Please check the folders inside /xsexamples/servers/ and rename the htaccess files to .htaccess if necessary.<br/>Accessing xmoovStream Server managed files require query strings without the Apache <strong>rewrite_module</strong> or other url rewriting equivalent.</p>
					<?php } ?><p>More about this in the <?php echo $doclink ?>.</p>
			</div>
