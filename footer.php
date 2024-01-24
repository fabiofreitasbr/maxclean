<footer id="footer" class="bg-gray-100 py-2 md:py-8 text-blue-500 font-brandon">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 md:gap-x-16">
            <div class="md:block flex justify-center md:col-span-3 lg:col-span-1">
                <a href="<?php echo get_bloginfo('home'); ?>">
                    <img alt="" data-src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" class="mx-auto my-4 ls-is-cached lazyloaded" src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png">
                    <noscript>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="">
                    </noscript>
                </a>
            </div>
            <div class="my-4 md:my-0 flex flex-col items-center text-center md:text-left md:block">
                <h3 class="py-3 text-2xl">MENU</h3>
                <hr class="w-6 mb-4 border border-solid border-blue-500" />
                <div id="menu-principal-footer" class="menu-principal-container uppercase text-sm">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'principal',
                            'menu_class' => 'font-reading',
                            'menu_id' => 'header-nav',
                            'container_class' => 'menu-principal-container uppercase text-sm',
                            'container_id' => 'menu-principal-header',
                            'walker' => new OrganizacaoMenuRodape()
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="my-4 md:my-0 flex flex-col items-center text-center md:text-left md:block">
                <h3 class="py-3 text-2xl">CONTATO</h3>
                <hr class="w-6 mb-4 border border-solid border-blue-500" />
                <div id="menu-principal-footer" class="menu-principal-container uppercase text-sm">
                    <ul id="footer-nav" class="font-reading">
                        <li id="nav-menu-item-21" class="py-1">
                            <a href="<?php echo InfoVar::show('email'); ?>" target="_blank" class="conversion-contact main-menu-link text-blue-500 hover:text-green-500 transition">
                                <i class="far fa-envelope"></i> <?php echo InfoVar::show('emailLabel'); ?>
                            </a>
                        </li>
                        <li id="nav-menu-item-21" class="py-1">
                            <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank" class="conversion-contact main-menu-link text-blue-500 hover:text-green-500 transition">
                                <i class="fab fa-whatsapp"></i> <?php echo InfoVar::show('whatsappLabel'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="my-4 md:my-0 flex flex-col items-center text-center md:text-left md:block">
                <h3 class="py-3 text-2xl">REDES SOCIAIS</h3>
                <hr class="w-6 mb-4 border border-solid border-blue-500" />
                <div class="py-2 md:text-lg flex text-gray-900 gap-5">
                    <div>
                        <a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank" class="conversion-contact text-blue-500 hover:text-green-500">
                            <i class="fa-brands fa-square-facebook text-xl md:text-2xl lg:text-3xl"></i>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank" class="conversion-contact text-blue-500 hover:text-green-500">
                            <i class="fa-brands fa-instagram text-xl md:text-2xl lg:text-3xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="pos-footer bg-green-500 text-blue-500 py-3">
    <div class="container mx-auto px-4">
        <div class="text-center text-xs md:text-sm uppercase py-1 font-medium">
            <strong class="font-bold"><?php echo get_bloginfo('title'); ?></strong> - Todos os direitos reservados
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/script.js"></script>
</body>

</html>