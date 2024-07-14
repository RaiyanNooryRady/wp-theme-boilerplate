<?Php
/**
 * Navigation template
 * @package WPTB
 */
$menu_class = WPTB_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('wptb-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);