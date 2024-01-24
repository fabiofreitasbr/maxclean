<nav class="fixed md:hidden top-0 h-screen w-72 bg-blue-500 z-50 text-base transition-all duration-300 ease-in-out font-open -right-full" id="header-bar-mobile">
    <div class="hidden -right-full"></div>
    <div class="button-close absolute top-0 right-0 px-4 py-2 my-2 mx-4 text-2xl rounded-md text-blue-500 hover:text-white transition-colors" id="header-bar-mobile-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="block">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'principal',
                'menu_class' => 'uppercase text-lg p-4',
                'menu_id' => 'header-nav',
                'container_class' => 'block',
                'container_id' => 'menu-principal-header',
                'walker' => new OrganizacaoMenuMobile()
            )
        );
        ?>
    </div>
</nav>