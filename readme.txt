=== Restrict By Role ===

Contributors: BrashRebel
Tags: users, restrict, access
Requires at least: 3.0.0
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

This plugin is very simple. It allows content creators to wrap pieces of content in a special shortcode and specify in that shortcode which user roles have read access to that content.

== Installation ==

1. Upload to `wp-content/plugins`
1. Activate via the Plugins menu
1. Create some awesome content within any post type
1. Place a `[rbr role="X" message="Your message"]` before the content you wish to restrict, replacing `X` with Subscriber, Contributor, Author, Editor or Administrator and replacing `Your message` with what you would like people to see if they are not allowed to view the content
1. Place a `[/rbr]` shortcode at the end of the content you wish to restrict

== Notes ==

You can also use an additional parameter in the shortcode if you need to get way more specific about user roles that can access the content. The parameter is `privilege` and it accepts values from <a href="https://codex.wordpress.org/Roles_and_Capabilities">WordPress' Roles and Capabilities</a>. Just figure out the values you need and enter those in the `privilege` parameter in the shortcode and don't specify a `role`.

<h3>EXAMPLE</h3>
`[rbr role="edit_posts"]`

== Changelog ==

= 0.1 =


* Initial release.