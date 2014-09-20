<?php
/*
Plugin Name: Restrict By Role
Description: A simple system for restricting access to front-end content by user role.
Author: Kyle Maurer
Version: 1.0
Author URI: http://realbigmarketing.com
*/
require_once('shortcode.php');

// We need some CSS to make the restricted block look...better
function rbr_css() {
	echo "<style type='text/css'>
	.rbr { padding: 20px; background-color: rgba(255,255,255,0.4); }
	</style>";
}
add_action( 'wp_head', 'rbr_css' );