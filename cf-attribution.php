<?php
/*
Plugin Name: CF Attribution
Plugin URI: http://crowdfavorite.com
Description: Shows attribution for Crowd Favorite in various headers
Author: Crowd Favorite
Version: 1.0
Author URI: http://crowdfavorite.com
*/

function cf_attribution($echo = true, $comment_type = 'html', $add_line_breaks = true) {
	$message = apply_filters('cf_attribution_message', 'Development by Crowd Favorite - http://crowdfavorite.com/');

	switch ($comment_type) {
		case 'css':
			$message = '/** ' . $message . ' **/'. PHP_EOL;
		break;

		case 'html':
		default:
			$message = '<!-- ' . $message . ' -->';
	}

	if (true == $add_line_breaks) {
		$message = PHP_EOL . $message . PHP_EOL;
	}

	if (true == $echo) {
		echo $message;
	}
	else {
		return $message;
	}
}
add_action('wp_head', 'cf_attribution', 0, 0);

function cfao_cf_attribution($header) {
	return cf_attribution(false, 'css', false) . $header;
}
//add_filter('cfao_style_file_header', 'cfao_cf_attribution');
//add_filter('cfao_script_file_header', 'cfao_cf_attribution');
