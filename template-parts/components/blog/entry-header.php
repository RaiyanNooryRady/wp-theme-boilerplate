<?php
/**
 * Template for post entry header
 */
$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, "_hide_page_title", true);
$heading_class = !empty($hide_title) && 'yes' === $hide_title ? 'hide' : '';

$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
