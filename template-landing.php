<?php
/*
Template Name: Landing - Higienização
*/
echo get_header('higienizacao');
get_template_part('templates/home/home', 'banner');
get_template_part('templates/parts/about', 'higienizacao');
get_template_part('templates/home/home', 'resultados');
get_template_part('templates/home/home', 'vantagens');
get_template_part('templates/home/home', 'clientes');
get_template_part('templates/home/home', 'depoimentos');
get_template_part('templates/home/home', 'contato');
echo get_footer('higienizacao');
?>