<?php

/*	

	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/
	
	
*/

?>
      		<div class="box">
          	<h1>System Information</h1>
          	<p class="error center">
          		The <strong>xshelper</strong> folder is for testing purposes only! Do not leave it on your server as it poses a security risk.
          	</p>
          	<table>
			    <tbody>
					<tr>
						<th>
							xmoovStream version:
						</th>
						<td>
							<?php echo $xmoovStream->version; ?>
						</td>
					</tr>
					<?php $check = !version_compare ( PHP_VERSION, $xmoovStream->min_php_version, '>=' ) ? false : true; ?>
					<tr class="<?php echo $check ? "pass" : "fail"; ?>">
						<th>
							PHP Version:
						</th>
						<td>
							<?php echo PHP_VERSION; ?>
						</td>
					</tr>
					<?php $check = ini_get('safe_mode') ? true : false; ?>
					<tr class="<?php echo !$check ? "pass" : "fail"; ?>">
						<th>
							safe_mode:
						</th>
						<td>
							Safe mode should be turned off for large file support
						</td>
					</tr>
					<?php $check = isset($_GET["rewrite"]) ? true : false; ?>
					<tr class="<?php echo $check ? "pass" : "fail"; ?>">
						<th>
							rewrite_engine:
						</th>
						<td>
							The Apache rewrite_engine module or other URL rewriting equivalent should be enabled for nice urls
						</td>
					</tr>
					<?php $check = is_writable(XS_LOGS) ? true : false; ?>
					<tr class="<?php echo $check ? "pass" : "fail"; ?>">
						<th>
							Logs folder writable:
						</th>
						<td>
							<?php echo XS_LOGS; ?>
						</td>
					</tr>
      			</tbody>
      		</table>
      		</div>
      		
			<div class="box">
				<h1>xmoovStream Files</h1>
				<table>
				    <tbody>
	      				<tr>
				            <td>
				            	<?php echo XS_FILES; ?>
				            </td>
				      	</tr>
	      			</tbody>
	      		</table>
          	</div>
			<div class="box">
			<h1>Default Settings</h1>
			
				
				
				
				
			<table>
			    <tbody>
			        <?php /*$check = is_dir ($xmoovStream->config["file_path"]) ? true : false; ?>
			     	<tr class="<?php echo $check ? "pass" : "fail"; ?>">
						<th>
			            	Stream file location:
			            </th>
			            <td>
			           		<p><?php echo $xmoovStream->config["file_path"]; ?></p>
			            </td>
			      	</tr>*/?>
			      	<tr>
						<th>
			            	use_error_handling:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["use_error_handling"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	use_activity_handling:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["use_activity_handling"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	log_activity:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["log_activity"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	log_errors:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["log_errors"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	show_errors:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["show_errors"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	notify_errors:
			            </th>
			            <td>
			            	<?php echo ( $xmoovStream->config["notify_errors"] != false ? "Yes" : "No" ) . " (" . (isset($xmoovStream->config["notify_email"]) ? $xmoovStream->config["notify_email"] : '<span class="error">No email address defined</span>' ) . ")" ?>
			            </td>
			      	</tr>
			      	 <tr>
						<th>
			            	use_http_range:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["use_http_range"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			        <tr>
						<th>
			            	Force download:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["force_download"] ? "Yes" : "No"; ?>
			            </td>
			      	</tr>
			        <tr>
						<th>
			            	Throttle Download:
			            </th>
			            <td>
			            	<?php echo $xmoovStream->config["throttle"] ? $xmoovStream->config["throttle"] . ' KB/s' : "No"; ?>
			            </td>
			      	</tr>
			        <tr>
						<th>
			            	Burst size:
			        	</th>
			            <td>
			            	<?php echo $xmoovStream->config["burst_size"] . " KB"; ?>
			            </td>
			      	</tr>
			      	<tr>
						<th>
			            	Buffer size:
			        	</th>
			            <td>
			            	<?php echo $xmoovStream->config["buffer_size"] . " KB"; ?>
			            </td>
			      	</tr>
				</tbody>
			</table>
				
				
			</div>
			
			<div class="box">
			<h1>Default MIME Types</h1>
			
			<table>
			    <tbody>
			    <?php foreach ($xmoovStream->config["mime_types"] as $ext => $mime) { ?>
			    	<tr>
			    		<th>
			            	<?php echo $ext; ?>
			            </th>
						<td>
			            	<?php echo $mime; ?>
			            </td>
			      	</tr>
			    <?php } ?>
			    </tbody>
			</tabel>
			
			</div>
