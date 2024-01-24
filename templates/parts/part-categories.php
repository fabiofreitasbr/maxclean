<section class="py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 text-center text-2xl md:text-4xl my-4 pb-4 font-medium">SERVIÇOS</h2>
        <?php get_template_part('templates/parts/part', 'categories-list'); ?>
        <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="conversion-contact" target="_blank"><button class="bg-blue-500 hover:bg-blue-600 transition text-white flex items-center font-medium rounded-full my-6 py-2 px-8 md:px-10 mx-auto block text-base md:text-lg uppercase">entrar em contato</button></a>
    </div>
</section>