<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('myclass'); ?>>
<?php
    //wp version lower than 5.2 the function doesn't exists.
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
 <h1>header</h1>