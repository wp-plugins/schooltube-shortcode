=== Plugin Name ===
Contributors: foadah
Tags: shortcode schooltube
Requires at least: 3.0.1
Tested up to: 3.4
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Description ==

This plugin uses the [schooltube]<VideoURL>[/schooltube] shortcode to grab the <iframe> embed code from http://www.schooltube.com/oembed.xml?url=<VideoURL>.  *This plugin does NO error checking yet*  I.e. it will accept (and fail, possibly miserably) with any URL/code.  Do not use where untrusted/uneducated people post content.  Also, this plugin does not yet allow you to set/change the default size (which comes from the schooltube.com XML file).

== Installation ==

1. Upload the files to the /wp-content/plugins/schooltube-shortcode/ directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Usage =

Once the plugin is activated, use the shortcode in your posts/pages
	[schooltube]http://www.schooltube.com/video/912133f720ea435d9ecc/SchoolTube%20WordPress%20Tutorial[/schooltube]
	
== Changelog ==
= 0.1 =
* Newly created and a bit messy