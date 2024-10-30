=== Change Blog to News ===
Contributors: DanielSantoro
Tags: Blog, Articles, Posts, News, Slugs, URL
Requires at least: 3.8.0
Tested up to: 4.0.1
Stable tag: trunk
License: GPL
License URI: http://www.gnu.org/licenses/gpl.html

Changes the default "blog" slug to "news" for a professional feel - we're over the stigma, but those agency types... :)

== Description ==

Time after time, I've built sites where "Blog" just didn't sound professional enough. Although it's a little change, this simple plugin replaces the default "blog" slug with "news" - in the frontend, in the backend, and in the URLs.


= Notes =

This plugin was created and tested using WordPress 4.0.1. No guarantee provided - please use the plugin with caution. If you experience any issues, please [let the developer know](http://danielsantoro.com/contact/).

If you're currently displaying 'blog' in your site's articles, this WILL cause an SEO hit unless you add a redirect. Disclaimer over!

== Installation ==
1. Download the plugin & install it to your `wp-content/plugins` folder (or use the Plugins menu through the WordPress Administration section)
2. Activate the plugin
3. Navigate to **Settings > Permalinks** and save. This will refresh your Permalinks.
4. Empty caches - you're good to go!

== Frequently Asked Questions ==
= Q: Why? Why are you doing this!? =
A: I got tired of adding the same function to site after site after site. Maybe this will help!

= Q: Who would use this? =
A: Site owners, developers, or anyone who still thinks "blog" is an ugly term.

= Q: Can't I do this through my `functions.php` file? =
A: Of course you can, but this is better - it will always be in effect, no matter the theme. 

= Q: MY SEO IS BROKEN PEOPLE ARE 404-ING AND I'M MAD WILL YOU FIX IT? =
A: There's not much to fix - just uninstall the plugin for the short term. To use this functionality, you'll need to set up a rewrite rule in your `.htaccess` - you can [check out this starter page by Google](https://support.google.com/webmasters/answer/93633?hl=en) or [use a generator](https://donatstudios.com/RewriteRule_Generator).

== Changelog ==

= 12/15/2014 - Version 1.0.0 =  
 * Initial Release