<?php
/*
Template Name: Contato
*/
echo get_header();
?>
<section id="contato" class="min-h-[35rem] py-4 md:py-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
            <div class="lg:px-10">
                <div class=" p-6 shadow-xl rounded-xl">
                    <h3 class="font-base text-blue-500 text-xl md:text-2xl my-2 py-4">Entre em contato conosco</h3>
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contato"]'); ?>
                </div>
            </div>
            <div class="text-sm md:text-xl text-black rounded-xl">
                <div class="text-md md:text-lg p-6 my-3 md:mt-0">
                    <div class="text-lg md:text-xl pb-2">
                        <h3 class="font-bold uppercase">Será um prazer te atender!</h3>
                        <p>Preencha nosso formulário ou entre em contato conosco para esclarecer dúvidas ou fazer um orçamento!</p>
                    </div>
                    <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="conversion-contact" target="_blank">
                        <div class="flex justify-start items-center px-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all">
                            <div class="px-4 md:px-6 text-xl md:text-4xl text-blue-500">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </div>
                            <div>
                                <div class="py-1 font-bold uppercase">WhatsApp:</div>
                                <div><?php echo InfoVar::show('whatsappLabel'); ?></div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo InfoVar::show('email'); ?>" class="conversion-contact" target="_blank">
                        <div class="flex justify-start items-center px-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all">
                            <div class="px-4 md:px-6 text-xl md:text-4xl text-blue-500">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div>
                                <div class="py-1 font-bold uppercase">E-mail:</div>
                                <div><?php echo InfoVar::show('emailLabel'); ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// get_template_part('templates/parts/contato', 'maps');
echo get_footer();
?>