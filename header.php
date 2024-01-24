<!doctype html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d2ec30afa6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/fti1akx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11434777744"></script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11434777744'); </script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQZE3XP134"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-PQZE3XP134');
    </script>
</head>
<body class="font-brandon">
    <?php
    echo get_template_part('templates/parts/pre', 'header');
    echo get_template_part('templates/parts/header', 'menu');
    echo get_template_part('templates/parts/header', 'mobile');
    if (!is_front_page()) {
        echo get_template_part('templates/parts/header', 'title');
    }
    ?>