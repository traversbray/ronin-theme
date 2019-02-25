<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ronin Theme
 */

get_header('opening');
?>

<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="nav-logo">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><h1 style="display:none"><?php bloginfo('name'); ?></h1></a>
    </div>
        <div class="nav-list">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>
        </div>
   </div>
</nav>
</header><!-- #masthead -->

<div id="content" class="site-content">
