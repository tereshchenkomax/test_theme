<?php

function loadScriptSite(){

    $version = null;

//    wp_register_style(
//        'Test-font-awesome', //$handle
//        get_template_directory_uri().'/css/font-awesome.min.css', // $src
//        array(), //$deps,
//        $version // $ver
//    );
//    wp_register_style(
//        'StepByStep-core', //$handle
//        get_template_directory_uri().'/css/core.css', // $src
//        array(), //$deps,
//        $version // $ver
//    );
    wp_register_style(
        'Test-css', //$handle
        get_template_directory_uri().'/out/styles/bundle.css', // $src
        array(), //$deps,
        $version // $ver
    );
//    wp_register_style(
//        'Test-custom', //$handle
//        get_template_directory_uri().'/css/custom.css', // $src
//        array(), //$deps,
//        $version // $ver
//    );

//    wp_enqueue_style('Test-font-awesome');
//    wp_enqueue_style('StepByStep-core');
    wp_enqueue_style('Test-css');
//    wp_enqueue_style('StepByStep-custom');

    wp_register_script(
        'Test-main', //$handle
        get_template_directory_uri().'/out/js/all.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    wp_enqueue_script('Test-main');
}
add_action( 'wp_enqueue_scripts', 'loadScriptSite');
