=== Themed login ===
Contributors: karevn
Tags: login, form, user, template, custom
Requires at least: 3.0
Tested up to: 3.1.3
Stable tag: 1.0.4

Makes WordPress login, registration and password retrieval pages totally themeable using WP theme mechanism. 

== Description ==

Themed login makes it possible to change the look of default Wordpress login system using 
templates located at your theme folder, not just CSS-level customizations:

*    Login - login.php
*    Lost password form - retrievepassword.php
*    Registration - register.php
*   Registration confirmation - registered.php

If your theme does not contain one of the files described above - that is not a big deal, 
WordPress's defaults will be used. See usage examples in "examples" plugin directory.

= Plugin's Official Site =

[karevn.com](http://karevn.com)


== Installation ==

1. Upload the entire `themed-login` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Add login.php, retrievepassword.php, register.php, registered.php templates to your theme folder. You can find a reference code inside "examples" directory.


== Frequently Asked Questions ==

[Support](http://jetdog.biz/projects/wp-custom-login)

== Screenshots ==

1. Themed login page on progressivegraphics.net site.
2. Themed login page on Drill America site.

== Changelog ==

= 1.0.4 =
* Readme update
* Added screenshots

= 1.0.3 =
* Fix: wrong function names in examples

= 1.0.2 =
* Fix: Login did not work

= 1.0.1 =
* Example themed page implementations added
= 1.0 =
* Initial Release


