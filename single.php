<?php
echo get_header();
if (have_posts()) {
    while(have_posts()) {
        the_post();
        ?>
        <main>
            <section class="py-10 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="w-full md:w-2/3 lg:w-3/4 mx-auto">
                        <h1 class="text-2xl uppercase text-red-700 font-medium my-4"><?php echo get_the_title(); ?></h1>
                        <h3 class="text-base uppercase text-gray-500 my-4">publicado: <?php echo get_the_date('j \d\e F \d\e Y - G:i'); ?></h3>
                        <a href=""><button class="bg-blue-500 text-gray-100 hover:bg-red-800 hover:text-gray-100 font-medium rounded-full my-4 py-2 px-10 block text-base uppercase">Outras Dicas</button></a>
                        <div class="text-lg text-gray-600 content-single">
                            <img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" class="w-72 py-4 md:py-0 rounded-lg float-none md:float-right">
                            <?php the_content(); ?>
                        </div>
                        <a href=""><button class="bg-blue-500 text-gray-100 hover:bg-red-800 hover:text-gray-100 font-medium rounded-full my-4 py-2 px-10 block text-base uppercase">Outras Dicas</button></a>
                    </div>
                </div>
            </section>
        </main>
        <?php
    }
}
echo get_footer();
?>