<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="menuBtnBar"></span>
        <span class="menuBtnBar"></span>
        <span class="menuBtnBar"></span>
    </button>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
    ) );
    ?>
</nav><!-- #site-navigation -->
