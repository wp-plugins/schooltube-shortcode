<?php
/*
Plugin Name: SchoolTube Shortcode
Plugin URI: http://wordpress.org/extend/plugins/schooltube-shortcode/
Description: Use the shortcode [schooltube] to embed SchoolTube videos using their oembed API to grab embed code.  This plugin does not yet allow for video iframe resizing.
Version: 0.1 ALPHA
Author: Jeremy Wood
Author URI: <none yet>
*/

/*
SchoolTube Short Code Plugin
Copyright (C) 2013 Jeremy Wood

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

function GenerateSchoolTube( $atts, $content = null ) {
	$schooltubeurl = 'http://www.schooltube.com/oembed.xml?url=' . do_shortcode($content);
//grab oembed XML file from schooltube.
	$file = fopen ($schooltubeurl, "r");
	if (!$file) {
	    //quietly error out
		return "<!-- unable to open file -->";
	    break;
	}
	while (!feof ($file)) {
	    $line = fgets ($file, 1024);
	    //grab html code of embed
		if (preg_match ("@\<html\>(.*)\</html\>@i", $line, $out)) {
	        $title = $out[1];
	        break;
	    }
	}
	fclose($file);
	return html_entity_decode($title);
}
add_shortcode( 'schooltube', 'GenerateSchoolTube' );

?>