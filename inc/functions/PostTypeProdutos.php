<?php 
function postTypeProdutos () {
    $labels = array(
        'name'               => _x( 'Produtos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Produtos', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Produtos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Produtos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Produtos', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Produtos', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Produtos', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Produtos', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Produtos', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Produtos', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Produtos Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Produtos encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Produtos encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'produto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('produtos', $args);
    add_post_type_support( 'produtos', 'wps_subtitle' );
}
add_action('init', 'postTypeProdutos');

function productsTipos() {
    $label = array(
        'name' => 'Tipos',
        'singular_name' => 'Tipo',
        'menu_name' => 'Tipos',
        'all_items' => 'Todas as Tipos',
        'edit_item' => 'Editar Tipo',
        'view_item' => 'Visualizar',
        'update_item' => 'Atualizar',
        'add_new_item' => 'Adicionar Nova',
        'new_item_name' => 'Novo Item',
        'parent_item' => 'Tipo Pai',
        'parent_item_colon' => '',
        'search_items' => '',
        'popular_items' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
        'not_found' => ''
    );
    register_taxonomy(
        'tipo',
        'produtos',
        array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'tipos')
        )
    );
}
add_action('init',  'productsTipos');