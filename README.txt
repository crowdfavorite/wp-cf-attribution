# Usage

This plugin will automatically put in a default message ( Development by Crowd Favorite - http://crowdfavorite.com/ ) as a comment in the HTML header. There is a filter in place ('cf_attribution_message') that allows the message to be changed.

The main function is executed as an action during 'wp_head' with a priority of 0. It can also be called directly or added ot other filters and actions if needed.

	function cf_attribution($echo_message = true, $comment_type = 'html', $add_line_breaks = true)

	- if $echo_message is TRUE, then the message is echoed (and returned). If it is false then the message is simply returned.
	- $comment_type can be 'html' (default), 'css', 'javascript', or 'js'. If none or an invalid type is specified, HTML will be used.
	- if $add_line_breaks is TRUE, then PHP_EOLs are added before and after the message. All messages have a PHP_EOL at the end of them already.



# Implementation

This plugin can be installed as a standard WordPress plugin (and then enabled/disbaled as needed), but works better when integrated as a must-use plugin or theme plugin. Simply including the cf-attribution.php file enables the plugin and will insert a comment with the message into the header of every page served by WordPress.

## Changing the message

Here's an example of how to change the default message to 'This is a different message'.

	function change_cf_attribution_message ($message) {
		return 'This is a different message';
	}
	add_filter('cf_attribution_message', 'change_cf_attribution_message');

## CF Asset Optimizer (CFAO) Integration

There is also CF Asset Optimizer (CFAO) integration which is not enabled by default. To enable CSS or JavaScript header attribution, add the following lines as appropriate:

	add_filter('cfao_style_file_header', 'cfao_cf_attribution');
	add_filter('cfao_script_file_header', 'cfao_cf_attribution');

This puts the message as a comment in scripts and CSS files delivered by CFAO.
