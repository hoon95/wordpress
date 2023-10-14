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

?>