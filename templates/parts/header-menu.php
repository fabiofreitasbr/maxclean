<header class="h-20 bg-blue-500 ">
    <div class="container mx-auto px-4 text-white h-full">
        <div class="flex justify-between items-center h-full">
            <div class="logo">
                <a href="<?php echo get_bloginfo('home'); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-white.png" class="h-10 lg:h-16" alt=""></a>
            </div>
            <nav class="items-center flex">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'principal',
                        'menu_class' => 'mx-2 hidden md:flex',
                        'menu_id' => 'header-nav',
                        'container_class' => 'area-menu-principal',
                        'container_id' => 'menu-principal-header',
                        'walker' => new OrganizacaoMenuPrincipal()
                    )
                );
                ?>
                <a id="mobile-menu-hamburger">
                    <div class="hamburger hamburger--squeeze md:hidden px-4">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
            </nav>
        </div>
    </div>
</header>