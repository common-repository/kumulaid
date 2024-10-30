<?php

/*
Plugin Name: KumulAid
Plugin URI: http://wordpress.org/plugins/kumulaid/
Description: The KumulAid plugin adds an easy way to add the kumulaid donation button to your website.
Author: Xavier Geerinck
Version: 1.0
Author URI: http://xaviergeerinck.com/
*/

// [kumulaid id="89"]
function kumulaid_shortcode_func( $atts ) {
    $a = shortcode_atts(array(
        'id' => '0'
    ), $atts);
	
	wp_enqueue_script('kumulaid_widget', '//widget.kumulaid.com/sdk.js');
	
	$html = '<kumulaid-button charityId="'.$a['id'].'" />';

	return $html;
}

add_shortcode('kumulaid', 'kumulaid_shortcode_func');

?>