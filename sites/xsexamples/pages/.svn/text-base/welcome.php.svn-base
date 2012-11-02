<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	$image_htaccess = file_exists('servers/images/.htaccess') ? true : false;
	$no_ht_image = !$mod_rewrite || !$image_htaccess ? '?file=' : '';
	$warning = !$mod_rewrite || !$image_htaccess ? true : false;
?>

			<div id="header" class="box">
				<h1>Welcome</h1>
				<?php if ($warning){ include ('warning.php'); } ?><p class="center"><a href="http://stream.xmoov.com/" target="_blank"><img src="/xsexamples/servers/images/<?php echo $no_ht_image ?>powerd-by-xmoovstream.gif"/></a></p>
				<p>Thank you for downloading xmoovStream and supporting open source software.<br/>
				We have prepared this demo to help get you quickly acquainted with the xmoovStream Server functions and features. Please visit our <a href="http://stream.xmoov.com/support/">support</a> page for updated information and useful resources. We wish you a swift and successful installation.</p>
				<p>&nbsp;</p>
			</div>