
<div class="bg-green-500 text-white">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="py-2 md:px-5 bg-orange md:text-lg flex">
                <div class="px-2">
                    <a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank"
                        class="text-white hover:text-blue-500 transition">
                        <i class="fa-brands fa-square-facebook text-2xl" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="px-2">
                    <a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank"
                        class="text-white hover:text-blue-500 transition">
                        <i class="fa-brands fa-instagram text-2xl" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="py-2 md:px-5 bg-orange text-xs md:text-sm flex uppercase">
                <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"
                    class="conversion-contact text-white hover:text-blue-500 transition">
                    <div class="px-2 flex items-center">
                        <i class="fa-brands fa-whatsapp text-xl px-1" aria-hidden="true"></i>
                        <div class="mx-2 hidden sm:block"><?php echo InfoVar::show('whatsappLabel'); ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>