<?php
/* 
Plugin Name: Call To Support
Plugin URI: https://calltosupport.com
Description: This plugins embed call button to your site.
Author: calltosupport
Version: 1.0
Author URI: https://calltosupport.com
*/

/*  Copyright 2012  CallToSupport  (email : support@calltosupport.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function get_cts_bnt(){
	$cts_api_key 			= get_option('cts_api_key');
	if (!empty($cts_api_key)){ ?>
	<link href="http://calltosupport.com/buttons/css/cts.css" rel="stylesheet" type="text/css" />
<div id="calltosupport_btn">
<a href="http://calltosupport.com/client/initialize.php?indentifier=<?php echo $cts_api_key; ?>" onclick='window.open("http://calltosupport.com/client/initialize.php?indentifier=<?php echo $cts_api_key; ?>", "myWindow", "status = 0, height = 530, width = 420, resizable = 0"); return false;'>
<img src="http://calltosupport.com/client/get_button.php?indentifier=<?php echo $cts_api_key; ?>" alt="Call" title="Call" />
</a>
</div>
	<?php
    }	
}

add_action('wp_footer', 'get_cts_bnt');

include('plugin_interface.php');
?>