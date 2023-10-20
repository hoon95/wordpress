<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
        <nav>
            <ul>
                <?php wp_nav_menu( array( 
                    'theme_location' => 'header-menu',
                    'container' => '',
                    'fallback_cd' => false
                    ) ) ?>
            </ul>
        </nav>