<?php

/*

 xmoovStream Server Version: 0.8.4b

 Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
 License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/

 */

$video_htaccess = file_exists('servers/video/.htaccess') ? true : false;
$audio_htaccess = file_exists('servers/audio/.htaccess') ? true : false;
$player_htaccess = file_exists('servers/players/.htaccess') ? true : false;
$player_loader_htaccess = file_exists('servers/embed/.htaccess') ? true : false;
$image_htaccess = file_exists('servers/images/.htaccess') ? true : false;
$no_ht_player_loader = !$mod_rewrite || !$player_loader_htaccess ? true : false;
$no_ht_player = !$mod_rewrite || !$player_htaccess ? '?file=' : '';
$no_ht_video = !$mod_rewrite || !$video_htaccess ? '?file=' : '';
$no_ht_audio = !$mod_rewrite || !$audio_htaccess ? '?file=' : '';
$no_ht_image = !$mod_rewrite || !$image_htaccess ? '?file=' : '';
$warning = !$mod_rewrite || !$video_htaccess || !$player_htaccess || !$image_htaccess ? true : false;
?>

<div id="header" class="box">
<h1>Flash Media Streaming</h1>
<?php if ($warning) {
    include('warning.php');
}
?>
<h2>Http pseudo streaming with the xmoovStream Video Player</h2>
<p>This is an example of the xmoovStream Video Player retrieving a
thumbnail and video from the xmoovStream server using standard embed
code with flashvars to define the video and thumbnail. The video is
pseudo streaming enabled and can be random accessed.</p>
<p><object type="application/x-shockwave-flash" width="750" height="427"
	data="/libs/xmoovStream/player/xmoovStream_Video_Player.swf">
	<param name="movie" value="/libs/xmoovStream/player/xmoovStream_Video_Player.swf" />
	<param name="allowfullscreen" value="true" />
	<param name="thumbnail"
		value="/strage/stream/deliver/thumbnail/Mashiro_DEMO.jpg" />
	<param name="flashvars"
		value="video=/mnt/strage/stream/deliver/Mashiro_DEMO.mp4&streamer=true" />
	<embed
		src="/libs/xmoovStream/player/xmoovStream_Video_Player.swf?video=/strage/stream/deliver/Mashiro_DEMO.flv&streamer=true"
		width="800" height="600">
	</embed> </object></p>
<h2>xmoovStream Player Loader Embedding</h2>
<p>This is an example of the xmoovStream Player Loader embedded without
the use of flashvars.<br />
It retreves the video player, thumbnail and video from the follong url:
<br />
<a
	href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/xsexamples/servers/embed/video/flv/xmoovstream"
	target="_blank"><?php echo $_SERVER['HTTP_HOST']; ?>/xsexamples/servers/embed/video/flv/xmoovstream</a>
</p>
<p><?php if ($no_ht_player_loader) { ?><span class="error">The
xmoovStream Player Loader requires <strong>rewrite_engine</strong> on
and and .htaccess file to function.</span> <?php } else { ?><object
	type="application/x-shockwave-flash" width="750" height="427"
	data="/xsexamples/servers/embed/video/flv/xmoovstream">
	<param name="movie"
		value="/xsexamples/servers/embed/video/flv/xmoovstream" />
	<param name="allowfullscreen" value="true" />
</object> <?php } ?></p>
<h2>Audio streaming with the xmoovStream Audio Player</h2>
<p>This is an example of the xmoovStream Audio Player streaming an MP3
file.</p>
<p><object type="application/x-shockwave-flash" width="50" height="50"
	data="/xsexamples/servers/players/<?php echo $no_ht_player ?>audio">
	<param name="movie"
		value="/xsexamples/servers/players/<?php echo $no_ht_player ?>audio" />
	<param name="flashvars"
		value="audio=/xsexamples/servers/audio/<?php echo $no_ht_audio ?>xmoovstream.mp3" />
</object></p>
<p>&nbsp;</p>
</div>
