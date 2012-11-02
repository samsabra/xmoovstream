<?php

/*

xmoovStream Server Version: 0.8.4b

Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/

*/


@include ('../../libs/xmoovStream/include.php');
$p = isset($_GET["p"]) ? $_GET["p"] : null;
switch ($p)
{
    case 'systeminfo' :
        $xmoovStream = xmoovStream ('helper');
        $page = "../xshelper/$p";
        break;
    case 'downloads' :
        $xmoovStream = xmoovStream ('file_info');
        $page = "pages/$p";
        break;
    case 'hotlink' :
        $xsTokenHandler = new xsToken ();
        $token = $xsTokenHandler->setToken ('example.jpg');
    case 'flashmedia' :
    case 'quicktimemedia' :
    case 'audio' :
    case 'resources' :
        $page = "pages/$p";
        break;
    default :
        $p = 'welcome';
        $page = "pages/welcome";
        break;
}

$mod_rewrite = isset($_GET["rewrite"]) ? true : false;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style type="text/css">
body,html {
	background-color: #1C1C1C;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 13px;
	color: #CCC;
}

table {
	padding: 5px;
}

th {
	text-align: left;
	width: 200px;
	word-wrap: break-word;
}

td {
	width: 525px;
	word-wrap: break-word;
}

img {
	border: none;
}

.box {
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

.error,.fail {
	color: #ff0000;
}

.pass {
	color: #00FF00;
}

.warning {
	border-color: #ff3413;
	padding-right: 10px;
	padding-left: 10px;
	padding-bottom: 5px;
	padding-top: 5px;
	border-width: 1px;
	border-style: solid;
}

a {
	color: #FFF;
	text-decoration: none;
}

a:hover {
	color: #CCC;
}

h1,h2 {
	margin-top: 5px;
	margin-right: 0;
	margin-bottom: 0;
	margin-left: 0px;
	padding-top: 0;
	padding-right: 0;
	padding-left: 0;
}

h1 {
	color: #FFF;
	font-size: 18px;
	padding-bottom: 7px;
}

h2 {
	color: #FFF;
	font-size: 14px;
}

p,li { /*padding-bottom: 2px;
				font-size: 12px;
				line-height: 18px;*/

}

#nav {
	height: 30px;
	padding: 0;
	margin: 0;
	list-style-image: none;
	list-style-type: none;
}

#header li {
	float: left;
	margin: 0 0.5em;
}

#header li a {
	float: left;
	display: block;
	text-decoration: none;
	height: 15px;
	color: #666;
}

#nav .current {
	color: #FFF;
}

.center {
	text-align: center;
}
</style>
<title>xmoovStream Helper</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<body>
<div id="container">
<div id="header" class="box">
<h1>xmoovStream Examples</h1>
<?php if (defined('XS_DIR')){ ?>
<ul id="nav">
	<li><a href="/xsexamples/"
		class="<?php echo $p == 'welcome' ? 'current' : ''; ?>">Welcome</a></li>
		<?php if(file_exists('../xshelper/systeminfo.php')){ ?>
	<li><a href="/xsexamples/?p=systeminfo"
		class="<?php echo $p == 'systeminfo' ? 'current' : ''; ?>">System
	Information</a></li>
	<?php } ?>
	<li><a href="/xsexamples/?p=flashmedia"
		class="<?php echo $p == 'flashmedia' ? 'current' : ''; ?>">Flash Media</a></li>
	<li><a href="/xsexamples/?p=quicktimemedia"
		class="<?php echo $p == 'quicktimemedia' ? 'current' : ''; ?>">Quicktime
	Media</a></li>
	<li><a href="/xsexamples/?p=downloads"
		class="<?php echo $p == 'downloads' ? 'current' : ''; ?>">File
	Streaming</a></li>
	<li><a href="/xsexamples/?p=hotlink"
		class="<?php echo $p == 'hotlink' ? 'current' : ''; ?>">Anti Hot Link</a></li>
		<?php if(file_exists('../xsdocs/')){ ?>
	<li><a href="/xsexamples/?p=resources"
		class="<?php echo $p == 'resources' ? 'current' : ''; ?>">Resources</a></li>
		<?php } ?>
</ul>
		<?php } else { ?>
<p class="error">Could not find xmoovStream/include.php</p>
		<?php } ?></div>
		<?php if (defined('XS_DIR')) include ("$page.php"); ?></div>
</body>
</html>
