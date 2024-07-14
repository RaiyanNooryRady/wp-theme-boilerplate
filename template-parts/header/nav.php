<?Php
/**
 * Navigation template
 * @package WPTB
 */
?>
<h1>Navbar Functionality</h1>
<?php if (function_exists('the_custom_logo')) {
      the_custom_logo();
    } 

    if(has_nav_menu('wptb-header-menu')){
      wp_nav_menu([
          'theme_location'=>'wptb-header-menu',
          'container'=>'',
          'depth'=> 0,
          'items_wrap'=>'<ul class="navbar-nav ms-auto">%3$s</ul>',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker()

      ]);
  }
    
  ?>
