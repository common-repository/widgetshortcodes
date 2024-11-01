<?php
/*
	Plugin Name: WidgetShortcodes
	Plugin URI: http://blogs.wcnickerson.ca/WordPress/Plugins/WidgetShortcodes/
	Description: A simple plug in that allows you to enter shortcodes in Text widgets for your sidebar.
	Version: 1.0
	Author: William Charles Nickerson (LoneWolf)
	Author URI: http://blogs.wcnickerson.ca
*/

/*  
	Copyright 2010  William Charles Nickerson  (email : bill@wcnickerson.ca)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
 * WidgetShortcode Adds the shortcode_unautop and do_shortcode filters to text widgets 
 * so that shortcodes can be used.
 *
 * This could be achieved by putting the filters into the functions.php file of the theme, 
 * but a plugin is theme independant.
 */

if (function_exists ('shortcode_unautop')) {
	add_filter ('widget_text', 'shortcode_unautop');
}
add_filter ('widget_text', 'do_shortcode');

?>