=== Wordpress HTML ===
Contributors: stanton119
Donate link: http://www.richard-stanton.com/Wordpress-HTML
Tags: HTML, body, head
Requires at least: 3.0.1
Tested up to: 4.2
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add raw HTML to any post/page, without the Wordpress editor breaking it.

== Description ==

Wordpress HTML allows you to add custom HTML to both the post/page body and the head.

When copying HTML into the WordPress editor it adds spurious tags which break various elements and corrupt the HTML. By saving the HTML in the custom fields dialogue the exact HTML will be output to your post/page.

Also if you have a single page which requires an extra javascript library or style sheet you normally have to add it through your themes php files. Updating the theme files can be a pain; we normally have to set up an exception for that individual page and load it there. As this information is not available when we are editing the actual pages in the WordPress editor it is quite obstructive.

With WordPress HTML, we can add the library or stylesheet directly to the post/page head without the need to change the theme files. And importantly, all from within the WordPress editor for that page.

More details: [WordPress HTML](http://www.richard-stanton.com/wordpress/wordpress-html/)

== Installation ==

Upload the plugin to your blog and activate it.

In the post/page which needs HTML add a custom field with name: "body", paste the HTML into the value box, then insert the shortcode [body][/body] where it should appear in the page.

To add to the HTML head tag, add a custom field with name: "head" and paste the HTML into the value box.


Adding a Custom Field:

To add a custom field, scroll down in the editor to Custom Fields. There is an option underneath the dropdown to “Enter New”. Click that, type in “head” or "body", and then click “Add Custom Field”. This is shown in the screenshots.

== Screenshots ==

1. Custom fields
2. Editor window
3. Adding a custom field

== Changelog ==

= 0.1 =
*Release Date - 14th February, 2015*

* First version!