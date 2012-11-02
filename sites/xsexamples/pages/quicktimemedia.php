<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	$video_htaccess = file_exists('servers/video/.htaccess') ? true : false;
	$audio_htaccess = file_exists('servers/audio/.htaccess') ? true : false;
	$image_htaccess = file_exists('servers/images/.htaccess') ? true : false;
	$no_ht_video = !$mod_rewrite || !$video_htaccess ? '?file=' : '';
	$no_ht_audio = !$mod_rewrite || !$audio_htaccess ? '?file=' : '';
	$no_ht_image = !$mod_rewrite || !$image_htaccess ? '?file=' : '';
	$warning = !$mod_rewrite || !$video_htaccess || !$image_htaccess ? true : false;
?>

			<div id="header" class="box">
				<h1>Quicktime Media Streaming</h1>
				<?php if ($warning){ include ('warning.php'); } ?><h2>Quicktime video streaming</h2>
				<p>This is an example of the Apple Quicktime Player retrieving a thumbnail and video from the xmoovStream server. This example can be random accessed using an iPhone or <a href="/xsexamples/servers/video/<?php echo $no_ht_video ?>xmoovstream.mp4" target="_blank">Quicktime Player X</a>.</p>
				<p>
					<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" type="video/quicktime" data="/xsexamples/servers/images/<?php echo $no_ht_image ?>xmoovstream.jpg" width="750" height="427">
						<param name="src" value="/xsexamples/servers/images/xmoovstream.jpg" />
						<param name="href" value="/xsexamples/servers/video/<?php echo $no_ht_video ?>xmoovstream.mp4" />
						<param name="target" value="myself" />
						<param name="scale" value="tofit" />
						<embed type="video/quicktime" scale="tofit" src="/xsexamples/servers/images/<?php echo $no_ht_image ?>xmoovstream.jpg" width="750" height="427" href="/xsexamples/servers/video/<?php echo $no_ht_video ?>xmoovstream.mp4" target="myself" pluginspace="http://www.apple.com/quicktime/download/" />
					</object>
				</p>
				<h2>Quicktime audio streaming</h2>
				<p>This is an example of the Qucktime Player streaming a MP3 file. This example can also be random accessed using an iPhone or <a href="/xsexamples/servers/audio/<?php echo $no_ht_audio ?>xmoovstream.mp3" target="_blank">Quicktime Player X</a>.</p>
				<p>
					<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" type="audio/mp3" data="/xsexamples/servers/<?php echo $no_ht_audio ?>audio/xmoovstream.mp3" width="300" height="15">
						<param name="autoplay" value="false" />
						<param name="src" value="/xsexamples/servers/audio/<?php echo $no_ht_audio ?>xmoovstream.mp3" />
						<embed src="/xsexamples/servers/audio/<?php echo $no_ht_audio ?>xmoovstream.mp3" width="300" height="15" autoplay="false" pluginspace="http://www.apple.com/quicktime/download/" />
					</object>
				</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>