<?php 
/*
Template Name: Sobre
*/
echo get_header(); 
?>
<main>
    <section class="py-10 md:py-16">
        <div class="container mx-auto px-4">
            <div class="block lg:flex lg:flex-row-reverse">
                <div class="lg:w-3/6 flex justify-content items-center">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-normal.png" alt="" class="w-2/3 lg:w-1/2 mx-auto">
                </div>
                <div class="lg:w-3/6">
                    <div class="text-base text-justify md:text-left md:text-lg text-zinc-700 font-reading">
                        <h2 class="text-xl md:text-2xl py-4 text-blue-500 uppercase font-bold">Nossa História</h2>
                        <p class="py-2">
                            Somos uma empresa especializada em Higienização de sofás, Impermeabilização e Limpeza. Com anos de experiência no mercado, oferecemos soluções eficientes e de alta qualidade para manter a saúde e a higiene do seu estofado. 
                        </p>
                        <p class="py-2">Utilizamos os melhores produtos e técnicas para garantir resultados excepcionais e duradouros. Além disso, trabalhamos com profissionais altamente capacitados e comprometidos com a satisfação de nossos clientes. Não importa o tipo de tecido ou tamanho do sofá, nós temos a solução perfeita para suas necessidades. Entre em contato conosco para mais informações sobre nossos serviços.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="call" class="bg-[url('../img/higienizacao-sobre.png')] bg-cover bg-center bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <div class="block">
                <div>
                    <h3 class="text-center text-white text-xl md:text-3xl uppercase py-4 font-medium">Max Clean</h3>
                    <p class="text-center text-white uppercase">Higienização e Limpeza</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-20">
        <div class="container mx-auto px-4">
            <div class="text-base text-center md:text-lg text-zinc-700 font-reading">
                <h2 class="text-xl md:text-2xl py-4 text-blue-500 uppercase font-bold">MISSÃO</h2>
                <p class="py-2">Nossa missão é oferecer soluções de qualidade em Higienização de Sofás, Impermeabilização e Limpeza, contribuindo para o bem-estar e a saúde de nossos clientes. Acreditamos na importância de manter os móveis limpos e higienizados para preservar a saúde e o conforto das pessoas. </p>
            </div>
    </section>
</main>
<?php
get_template_part('templates/parts/part', 'call');
echo get_footer();
?>