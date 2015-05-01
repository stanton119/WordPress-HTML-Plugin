<?php
/**
 * Plugin Name: Wordpress HTML
 * Plugin URI: http://www.richard-stanton.com/Wordpress-HTML
 * Description: Add raw HTML to any post/page. In the post/page which needs HTML add a custom field with name: "body", paste the HTML into the value box, then insert the shortcode [body][/body] where it should appear in the page. To add to the HTML head tag, add a custom field with name: "head" and paste the HTML into the value box.
 * Version: 0.1
 * Author: Richard Stanton
 * Author URI: http://www.richard-stanton.com
 * License: GPL2
 */

function bodyhtml($atts, $content = null) {
	global $post;
	if(!empty($post)){
		// get custom field for 'body'
		$bodyHTML = get_post_meta($post->ID, 'body', true);
		if(!empty($bodyHTML)){
			// insert into body
			return $bodyHTML;
		}
	}
}
add_shortcode('body', 'bodyhtml');

function headhtml(){
	global $post;
	if(!empty($post)){
		// get custom field for 'head'
		$headHTML = get_post_meta($post->ID, 'head', true);
		if(!empty($headHTML)){
			// add to head
			echo $headHTML;
		}
	}
}
add_action('wp_head', 'headhtml');