<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	$image_htaccess = file_exists('servers/downloads/.htaccess') ? true : false;
	$no_ht_image = !$mod_rewrite || !$image_htaccess ? '&file=' : '/';
	$no_ht_token = !$mod_rewrite || !$image_htaccess ? '?key=' : '';
	$warning = !$mod_rewrite || !$image_htaccess ? true : false;
	$url = "/xsexamples/servers/protected_images/$no_ht_token$token$no_ht_image"."example.jpg";
?>

			<div id="header" class="box">
				<h1>Anti Hot Link</h1>
				<?php if ($warning){ include ('warning.php'); } ?><p>This is a hot link protected image being correctly retrieved from xmoovStream.</p>
				<p><?php echo $url; ?></p>
				<p class="center"><img src="<?php echo $url; ?>"/></p>
				<p>This example shows alternative content for a hot linked image.</p>
				<p>/xsexamples/servers/protected_images/<?php echo $no_ht_token ?>wrong_token<?php echo $no_ht_image ?>example.jpg</p>
				<p class="center"><img src="/xsexamples/servers/protected_images/<?php echo $no_ht_token ?>wrong_token<?php echo $no_ht_image ?>example.jpg"/></p>
				
				<p>&nbsp;</p>
			</div>