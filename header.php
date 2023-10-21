<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>
    <!--
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/responsive.css">
    -->
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
    <header>
       <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
       <nav>
           <!-- <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="portfolio.html">Portfolio</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="contact.html">Contact</a></li>
           </ul> -->
           <?php
           wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'container' => '',
              'fallback_cb' => false
            )
          );
           ?>
       </nav>   