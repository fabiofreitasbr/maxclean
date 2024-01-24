<section id="contato" class="bg-[url('../img/exemplos/contato.png')] bg-cover bg-top min-h-[35rem] pb-4 md:pb-10 pt-52 -mt-48">
    <div class="container mx-auto px-6">
        <div class="container mx-auto mb-2 md:mb-6 px-4">
            <div class="text-center">
                <h2 class="text-white uppercase font-medium text-xl md:text-3xl my-2">Entre em contato</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 py-10">
            <div class="lg:px-10">
                <div class=" p-6 bg-white shadow-xl rounded-xl">
                    <h3 class="font-base text-blue-500 text-xl md:text-2xl my-2 pb-4">Nós ligamos pra você!</h3>
                    <?php echo do_shortcode('[contact-form-7 id="24" title="Leads"]'); ?>
                </div>
            </div>
            <div class="text-sm md:text-xl text-black rounded-xl">
                <div class="text-md md:text-lg p-2 md:p-6 my-3 md:mt-0">
                    <div class="text-lg md:text-xl text-center md:text-left pb-2">
                        <h3 class="font-bold text-xl text-green-500 py-2 uppercase">quer fazer um orçamento?</h3>
                        <p class="text-white py-2">Preencha nosso formulário e nós entramos em contato para
                            esclarecer dúvidas ou fazer um orçamento!</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <hr class="border border-gray-100 w-full">
                        <div class="p-4 text-blue-500 font-medium uppercase">ou</div>
                        <hr class="border border-gray-100 w-full">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 xl:grid-cols-2 gap-4">
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="conversion-contact block"><button type="button" class="w-full bg-green-500 hover:bg-green-600 transition text-white font-medium rounded-full py-3 px-2 block text-base uppercase"><i class="fab fa-whatsapp"></i> Envie-nos uma mensagem!</button></a>
                        <a href="<?php echo InfoVar::show('phone'); ?>" class="conversion-contact block"><button type="button" class="w-full bg-white hover:bg-gray-100 transition text-blue-500 font-medium rounded-full py-3 px-2 block text-base uppercase"><i class="fas fa-phone"></i> Ligue agora mesmo!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>