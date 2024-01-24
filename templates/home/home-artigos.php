<section class="py-12" id="articles">
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 text-center text-2xl md:text-4xl my-4 pb-4 font-medium">NOSSOS ARTIGOS</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 auto-rows-fr">
            <?php 
            $argsArticles = array(
                'posts_per_page' => '4'
            );
            $articles = new WP_Query($argsArticles);
            if ($articles->have_posts()) {
                while ($articles->have_posts()) {
                    $articles->the_post();
                    ?>
                    <div class="px-2 py-4">
                        <a href="<?php echo get_permalink(); ?>" class="h-full">
                            <div class="rounded-xl h-full overflow-hidden shadow-lg shadow-gray-100">
                                <img alt="" data-src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail'); ?>" class="w-full lazyloaded" src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail'); ?>"><noscript><img src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail'); ?>" class="w-full" alt=""></noscript>
                                <div class="px-4 md:px-8 pt-4 md:pt-8 pb-2 md:pb-4 uppercase">
                                    <h3 class="text-sm md:text-lg text-gray-300 font-medium pb-3 md:pb-6"><?php echo get_the_title(); ?></h3>
                                    <div class="text-green-500 text-right py-2 text-base md:text-xl font-bold">VER MAIS</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <a href="<?php echo get_page_link(38); ?>" target="_blank"><button class="bg-blue-500 hover:bg-blue-600 transition text-white flex items-center font-medium rounded-full my-6 py-2 px-8 md:px-10 mx-auto block text-base md:text-lg uppercase">Ver Mais Dicas</button></a>
    </div>
</section>