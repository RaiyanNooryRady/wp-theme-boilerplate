<?php
/**
 * Bootstraps the Theme
 * @package WPTB
 */
namespace WPTB_THEME\Inc;

use WPTB_THEME\Inc\Traits\Singleton;

class WPTB_THEME
{
    use Singleton;
    protected function __construct()
    {
        //load class
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }
    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        add_theme_support('custom-background', [
            'default-color' => '0000ff',
            'default-image' => '',
        ]);
        add_theme_support('custom-header', [
            'default-image' => '',
            'default-text-color' => '000',
            'width' => 1000,
            'height' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);
        add_theme_support('post-thumbnails');
        /**
         * Register Image sizes
         */
        add_image_size('featured-thumbnail',350,233,true);
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links'); //Add default posts and comments RSS feed links to <head>
        add_theme_support('post-formats', ['aside', 'gallery', 'quote', 'image', 'video']);
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
        ]);
        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        global $contant_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
        add_theme_support('responsive-embeds');
        add_theme_support('editor-styles');
    }
}