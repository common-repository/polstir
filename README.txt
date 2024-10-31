=== Polstir ===
Contributors: polstir
Tags: polls comments voting question answer pollster
Requires at least: 3.1
Tested up to: 4.7.2
Stable tag: 3.0.0

Embed polls created with Polstir using the shortcode [polstir].

== Description ==

Embed polls created with Polstir using the shortcode [polstir].

= Demo =

[View a demo](http://demo.pol.st/
) of an embedded poll. View the full poll [page](https://pol.st/polstirmedia/wordpress-embed) for comparison.

= Usage =

Embed a poll using the shortcode `[polstir]` and the poll id. For example, to embed a poll with the url `https://pol.st/howdesign/dL5nQw9Ts729oPqaj` use the shortcode `[polstir id="dL5nQw9Ts729oPqaj"]`

To customize the appearance of the embedded poll, additional options can be set in the shortcode. The full list of shortcode defaults is as follows:

`[polstir id="wordpress-embed" image="1" question="1" comments="1" theme="light" style="normal"]`

The following poll sections can be hidden by setting them to "0":

* image **1, 0** *(defaults to 1)*
* question **1, 0** *(defaults to 1)*
* comments **1, 0** *(defaults to 1)*

Theme and style options can also be set:

* theme **light, dark** *(defaults to light)*
* style **normal, compact** *(defaults to normal)*

== Installation ==

This section describes how to install the plugin and get it working.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'polstir'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `polstir.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `polstir.zip`
2. Extract the `polstir` directory to your computer
3. Upload the `polstir` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Screenshots ==

1. Publishing a post with a poll shortcode
2. Sample embedded poll with comments

== Changelog ==

= 1.0 =
* Enable shortcode embedding

= 1.1 =
* Updated embed script and documentation

= 1.2 =
* Updated screenshots and static assets

= 1.5 =
* Updated security and readme

= 2.0 =
* Added advanced embed features (theme, style, and display options)

= 3.0 =
* Switch to new pol.st domain
