<?php 
echo get_header(); 
get_template_part('templates/home/home', 'banner');
get_template_part('templates/parts/part', 'categories');
get_template_part('templates/home/home', 'resultados');
get_template_part('templates/home/home', 'vantagens');
get_template_part('templates/home/home', 'clientes');
get_template_part('templates/home/home', 'depoimentos');
get_template_part('templates/home/home', 'contato');
get_template_part('templates/home/home', 'artigos');
get_footer();
?>