<?php
define('THEMEROOT', get_stylesheet_directory_uri());        // 현재 테마의 경로
define('IMAGES', THEMEROOT.'/images');
define('JS', THEMEROOT.'/js');

if(!function_exists('minimal_script')){
    function minimal_script(){
        // 스크립트 css 로드
        wp_enqueue_style( 'my-common', THEMEROOT.'/css/common.css');
        wp_enqueue_style( 'my-bootstrap', THEMEROOT.'/css/bootstrap-grid.min.css');
        wp_enqueue_style( 'my-responsive', THEMEROOT.'/css/responsive.css');
        wp_enqueue_style( 'my-default', THEMEROOT.'/css/default.css');

    }
    add_action( 'wp_enqueue_scripts', 'minimal_script' );
    
}

if(!function_exists('minimal_menu')){
    function minimal_menu() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
           )
         );
       }
       add_action( 'init', 'minimal_menu' );
}

add_theme_support( 'post-thumbnails' );

?>