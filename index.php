<?php 
echo get_header(); 
?>
<main>
    <div class="container mx-auto p-4">
        <?php 
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </section>
</main>
<?php
echo get_footer();
?>