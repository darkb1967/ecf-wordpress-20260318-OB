<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- attribut lang pour l'accessibilité (lecteurs d'écrans) et aussi pour le Référencement -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- obligatoire pour le responsive -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_stylesheet_directory_uri().'/main.js'; ?>" defer></script>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <a href="/"> <h1>Les villes du monde</h1> </a>
        <div class="site-navigation">
            <nav>
                <?php wp_nav_menu(['theme_location' => 'top-menu']); ?> 
            </nav>
        </div>
    </header>
    <div class="wrapper">
    <main class="site-main">
        <aside class="site-aside">
            <!-- SIDEBAR -->
            <?php dynamic_sidebar('principal'); ?>
        </aside>
    <!-- FIN HEADER -->