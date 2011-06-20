<?php
/*
Plugin Name: Themed Login
Plugin URI: mailto: karev.n@gmail.com
Description: Allows you to style login, registration and password retrieval pages using WP theme mechanism.
Version: 1.0.4
Author: Nikolay Karev
Author URI: mailto: karev.n@gmail.com
*/
require dirname(__FILE__) . '/model.php';
require dirname(__FILE__) . '/template_tags.php';
require dirname(__FILE__) . '/controller.php';
require dirname(__FILE__) . '/hooks.php';

register_activation_hook(dirname(__FILE__) . "/activation.php", 'lc_activate');
register_deactivation_hook(dirname(__FILE__) . "/activation.php", 'lc_deactivate');

