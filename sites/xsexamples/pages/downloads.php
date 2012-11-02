<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	$download_htaccess = file_exists('servers/downloads/.htaccess') ? true : false;
	$no_ht_download = !$mod_rewrite || !$download_htaccess ? '&file=' : '/';
	$no_ht_dlmedia = !$mod_rewrite || !$download_htaccess ? '?media=' : '';
	$warning = !$mod_rewrite || !$download_htaccess ? true : false;
?>

			<div id="header" class="box">
				<h1>File Streaming Server</h1>
				<?php if ($warning){ include ('warning.php'); } ?><p>This example demonstrates how you can use xmoovStream to serve file downloads. As you can see the, file size for each download has also been retrieved from the xmoovStream Server.</p>
				<p>
					<a href="/xsexamples/servers/downloads/<?php echo $no_ht_dlmedia ?>video<?php echo $no_ht_download ?>xmoovstream.mp4">Download: xmoovstream.mp4</a> (<?php $xmoovStream->set_file ('/video/xmoovstream.mp4'); echo $xmoovStream->mime . ', ' . $xmoovStream->human_file_size; ?>)<br/>
					<a href="/xsexamples/servers/downloads/<?php echo $no_ht_dlmedia ?>video<?php echo $no_ht_download ?>xmoovstream.flv">Download: xmoovstream.flv</a> (<?php $xmoovStream->set_file ('/video/xmoovstream.flv'); echo $xmoovStream->mime . ', ' . $xmoovStream->human_file_size;  ?>)<br/>
					<a href="/xsexamples/servers/downloads/<?php echo $no_ht_dlmedia ?>audio<?php echo $no_ht_download ?>xmoovstream.mp3">Download: xmoovstream.mp3</a> (<?php $xmoovStream->set_file ('/audio/xmoovstream.mp3'); echo $xmoovStream->mime . ', ' . $xmoovStream->human_file_size;  ?>)<br/>
					<a href="/xsexamples/servers/downloads/<?php echo $no_ht_dlmedia ?>images<?php echo $no_ht_download ?>xmoovstream.jpg">Download: xmoovstream.jpg</a> (<?php $xmoovStream->set_file ('/images/xmoovstream.jpg',true); echo $xmoovStream->mime . ', ' . $xmoovStream->human_file_size;  ?>)<br/>
				</p>
				<p>&nbsp;</p>
			</div>