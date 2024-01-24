<header class="h-20 bg-blue-500 ">
    <div class="container mx-auto px-4 text-white h-full">
        <div class="flex justify-between items-center h-full">
            <div class="logo">
                <a href="<?php echo get_bloginfo('home'); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-white.png" class="h-10 lg:h-16" alt=""></a>
            </div>
            <div class="flex items-center justify-end md:text-sm lg:text-base">
                <div class="mx-2">
                    <div class="user-info">
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank" class="conversion-contact w-full bg-green-500 hover:bg-green-600 transition text-white font-medium rounded-full py-3 px-2 block text-base uppercase">
                            <div class="px-2 flex items-center">
                                <i class="fa-brands fa-whatsapp text-xl px-1" aria-hidden="true"></i>
                                <div class="mx-2 hidden sm:block"><?php echo InfoVar::show('whatsappLabel'); ?></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>