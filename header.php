<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php bloginfo('name'); wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <?php wp_head(); ?>
</head>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'false',
                    'menu_class' => 'navbar-nav ml-auto',
                    'walker' => new Bootstrap_NavWalker()
                ));
            ?>
            <?php get_search_form(); ?>
        </div>
    </nav>
<body>