<?php
/**
 * Enqueue theme assets
 * @package WPTB
 */

namespace WPTB_THEME\Inc;
use WPTB_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         */
        add_action("wp_enqueue_scripts", [$this, 'register_styles']);
        add_action("wp_enqueue_scripts", [$this, 'register_scripts']);
    }
    public function register_styles()
    {
        //register styles
        wp_register_style('bootstrap-css', WPTB_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        wp_register_style("style-css", get_stylesheet_uri(), [], filemtime(WPTB_DIR_PATH . '/style.css'), 'all');
        //enqueue styles
        wp_enqueue_style("bootstrap-css");
        wp_enqueue_style("style-css");
    }
    public function register_scripts()
    {
        //register scripts
        wp_register_script('bootstrap-js', WPTB_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);
        wp_register_script("main-js", WPTB_DIR_URI . '/assets/main.js', [], filemtime(WPTB_DIR_PATH . '/assets/main.js'), true);
        //enqueue scripts
        wp_enqueue_script("bootstrap-js");
        wp_enqueue_script('main-js');
    }
}