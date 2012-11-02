<?php

/*

 xmoovStream Server Version: 0.8.4b

 Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
 License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/

 */

@include('../xmoovStream/include.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<style type="text/css">
			body, html
			{
				background-color: #1C1C1C;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 13px;
				color: #CCC;
			}
			table
			{
				padding: 5px;
			}
			th
			{
				text-align: left;
				width:200px;
				word-wrap: break-word;
			}
			td
			{
				width:525px;
				word-wrap: break-word;
			}
			.box
			{
				background: #333;
				margin: 1em auto 0 auto;
				width: 750px;
				padding: 0.2em 2em;
				-moz-border-radius: 8px;
				-khtml-border-radius: 8px;
				-webkit-border-radius: 8px;
				border-radius: 8px;
				border: 1px solid #666;
			}
			.error, .fail
			{
				color: #ff0000;
			}
			.pass
			{
				color: #00FF00;
			}
			a
			{
				color: #FFF;
				text-decoration: none;
			}
			a:hover
			{
				color: #CCC;
			}
			h1
			{
				clear: both;
				color: #FFF;
				padding-bottom: 7px;
				font-size: 18px;
				margin-top: 5px;
				margin-right: 0;
				margin-bottom: 0;
				margin-left: 0px;
				padding-top: 0;
				padding-right: 0;
				padding-left: 0;
			}
			h2
			{
				color: #FFF;
				font-size: 16px;
			}
			p, li
			{
				/*padding-bottom: 2px;
				font-size: 12px;
				line-height: 18px;*/
			}
			#nav
			{
				height:30px;
				padding: 0;
				margin: 0;
				list-style-image: none;
				list-style-type: none;
			}

			#header li
			{
				float: left;
				margin: 0 0.5em;
			}
			#header li a
			{
				float: left;
				display: block;
				text-decoration: none;
				height: 15px;
				color: #666;
			}
			#nav .current
			{
				color: #FFF;
			}
		</style>
		<title>xmoovStream Helper</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	</head>
	<body>
    	<div id="container">
			<div id="header" class="box">
          	<h1>xmoovStream Helper</h1>
          	<?php

if (!defined('XS_DIR')) {
    echo '<p class="error">Could not find xmoovStream/include.php</p>';
} else
    if (!$xmoovStream = xmoovStream('helper')) {
        echo '<p class="error">xmoovStream file path is incorrect</p>';
    } else {
?>

			</div>

				<?php

        include('systeminfo.php');

    }
?>

        </div>
</body>
</html>
