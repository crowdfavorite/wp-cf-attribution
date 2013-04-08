# Usage

This plugin will automatically put in a default message ( Development by Crowd Favorite - http://crowdfavorite.com/ ) as a comment in the HTML header. There is a filter in place ('cf_attribution_message') that allows the message to gbe changed.

There is also CF Asset Optimizer (CFAO) integration which is not enabled by default. To enable CSS or JavaScript header attribution, add the following lines as appropriate:

	add_filter('cfao_style_file_header', 'cfao_cf_attribution');
	add_filter('cfao_script_file_header', 'cfao_cf_attribution');

