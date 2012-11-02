<?php 

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
*/

	function getFiles($src)
	{
		if ($handle = opendir($src))
		{
		    while (false !== ($file = readdir($handle)))
		    {
		        if ($file != "." && $file != "..")
		        {
		        	if (is_file("$src/$file") && eregi('.pdf',$file))
		        	{
		        		$url = str_replace("..", $_SERVER['HTTP_HOST'], $src);
		            	echo '					<p><a href="http://'.$url.'/'.$file.'" target="_blank">'.$file."</a></p>\n";
		            }
		            else if (is_dir("$src/$file"))
		            {
		            	echo "					<h2>$file</h2>\n";
		            	getFiles ("$src/$file");
		            }
		        }
		    }
		    closedir($handle);
		}
	}
?>

			<div id="header" class="box">
				<h1>Resources</h1>
				<p>This is list of included resources and documentation.<br/>Please visit our <a href="http://stream.xmoov.com/support/">support</a> page for updated information and useful resources.</p>
				<p>
<?php getFiles('../xsdocs'); ?>
				</p>
				<p>&nbsp;</p>
			</div>