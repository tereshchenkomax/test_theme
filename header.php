<!DOCTYPE html>
<html>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <!--
    wp_head() WP Запускает хук-событие wp_head. Вызывается в шапке сайта в файле: header.php
    https://wp-kama.ru/function/wp_head
    -->
    <?php wp_head(); ?>

    <!--<link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link media="all" type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/core.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/skins/red.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/custom.css" rel="stylesheet">-->
</head>
<body class="home" itemscope itemtype="http://schema.org/WebPage">

<div id="masthead">

    <!-- ******HEADER****** -->
    <header id="header" class="header">
        <div class="container">
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">devAid</span>
                </a>
            </h1><!--//logo-->
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                        <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                        <li class="nav-item"><a class="scrollto" href="#docs">Docs</a></li>
                        <li class="nav-item"><a class="scrollto" href="#license">License</a></li>
                        <li class="nav-item last"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->

</div> <!-- #masthead -->