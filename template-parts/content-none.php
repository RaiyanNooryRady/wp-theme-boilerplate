<?php
/**
 * Template part for displaying message that the post cannot be found!
 * @package WPTB
 */
?>
<?php esc_html_e('Nothing Found!', 'wptb'); ?>

<?php
if (is_home() && current_user_can('publish_posts')) {
    ?>
    <p>
        <?php
        printf(
            wp_kses(
                __('Ready to publish your first post? <a href="%s">Get Started Here</a>', 'jagoron'),
                [
                    'a' =>
                        [
                            'href' => []
                        ]
                ]
            ),
            esc_url(admin_url('post-new.php'))
        );
        ?>
    </p>
    <?php
} else if (is_search()) {
    ?>
        <p><?php esc_html_e('Sorry but nothing matched your search item. Please try again with some different keywords.', 'jagoron'); ?>
        </p>
        <?php
        get_search_form();
} else {
    ?>
        <p><?php esc_html_e('It seems that we cannot find what you are looking for. Perhaps search can help', 'jagoron'); ?></p>
        <?php
        get_search_form();
}
?>