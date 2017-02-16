<?php
/**
 * Plugin Name: CPT UIkit (Custom)
 * Plugin URI: http://getuikit.com/v2/
 * Description: UIkit Wordpress plugin support for front-end styling. Checkout these guys: https://github.com/uikit/uikit
 * Version: 2.27.1.02162017
 * Author: Cat's Pajamas Technology
 * Author URI: https://catspajamas.tech/
 * License: MIT
 */
// register script and styles from CDN
wp_register_script('uikit-js','https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/js/uikit.min.js','jquery','2.27.1','');
wp_register_style ('uikit-css','https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/css/uikit.min.css','','2.27.1','');
// enqueue scripts and style
wp_enqueue_script('jquery');
wp_enqueue_script('uikit-js');
wp_enqueue_style('uikit-css');
