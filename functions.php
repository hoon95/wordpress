<?php
define('THEMEROOT', get_stylesheet_directory_uri());        // 현재 테마의 경로
define('IMAGES', THEMEROOT.'img');
define('JS', THEMEROOT.'/js');

if(!function_exists('hoon_script')){
    function hoon_script(){
        // 스크립트 css 로드
        wp_enqueue_style( 'my-theme', THEMEROOT.'/css/main.css');
    }
    add_action( 'wp_enqueue_scripts', 'hoon_script' );
    
}

if(!function_exists('hoon_menu')){
    function hoon_menu() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
           )
         );
       }
       add_action( 'init', 'hoon_menu' );
}

add_theme_support( 'post-thumbnails' );

?>