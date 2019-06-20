<!-- push the items to the end vertically -->
<nav id="site-navigation" class="main-navigation flex flex-auto items-end relative">

<!-- here we have alink to the logo to bring us back to our homepage -->
<a href="<?php echo get_site_url(); ?>"class="absolute top-0 left-0 logo">
    <img src="<?php echo get_template_directory_uri() . '/images/alter-ego-logo.svg'; ?>" class="db">
</a>


<?php
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'main-menu ma0 pa0 list',
    ) );
    ?>
</nav><!-- #site-navigation -->