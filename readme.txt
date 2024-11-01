=== WidgetShortcodes ===
Contributors: LoneWolfMuskoka
Donate link: http://blogs.wcnickerson.ca/wordpress
Tags: blocks flash uploader
Requires at least: 2.7.0
Tested up to: 2.9.2
Stable tag: 1.0

This plugin adds shortcode handling to the widget_text filter so that shortcodes can be used in Text widgets
on the sidebar.

== Description ==

Want to use shortcodes in your sidebar Text widgets?  Don't want to have to update the functions.php of the
theme to achieve this?  WidgetShortcodes comes to the rescue.  This plugin simply hooks shortcode_noautop and
do_shortcode to the widget_text filter to make this happen.  It keeps on working even if you change themes.

There are no setup options in this version.  It is turned on by activating the plugin and turned off by
deactivating it.  Easy, peasy!

== Installation ==
The current version is pretty basic.  It starts working as soon as it is activated and stops when deactivated.

1. Extract the zip archive to the `/wp-content/plugins/` directory.  This should create a *widget-shortcode* subdirectory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= What settings do I use to run WidgetShortcodes? =

Currently, there are no settings.  To turn it off, deactivate the plugin.

== Screenshots ==

No screenshots.  There are no options or settings.  It just quietly allows you to use your shortcodes.