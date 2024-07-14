<?php
/**
 * Theme Functions
 * @package WPTB
 */
if (!defined("WPTB_DIR_PATH")) {
    define("WPTB_DIR_PATH", untrailingslashit(get_template_directory()));
}
if(!defined("WPTB_DIR_URI")){
    define("WPTB_DIR_URI", untrailingslashit(get_template_directory_uri()));
}
//print_r(WPTB_DIR_PATH);
require_once WPTB_DIR_PATH . '/inc/helpers/autoloader.php';
//add wp_bootstrap_navwalker.php file
require_once 'wp_bootstrap_navwalker.php';

function wptb_get_theme_instance()
{
    \WPTB_THEME\Inc\WPTB_THEME::get_instance();
}
wptb_get_theme_instance();