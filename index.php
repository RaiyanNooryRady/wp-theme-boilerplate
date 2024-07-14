<?php
/**
 * Main Template File
 * @package Jagoron
 */
get_header();?>
<main class="main-area">
    hello main
   
    <?php
    if (is_home() && !is_front_page()) {
        single_post_title();
    }
    if ( have_posts() ) :
        while ( have_posts() ) { 
            the_post();
            // Display post content
            get_template_part('template-parts/content');
        }
    else:
        get_template_part('template-parts/content-none');

    endif;
    wp_reset_postdata();
    ?>

</main>
<?php get_footer();