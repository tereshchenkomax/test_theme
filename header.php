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

    <div id="site-header" role="banner">
        <div class="container">
            <div class="row">

                <div id="branding">
                    <a class="logo" href="index.html">Header</a>
                </div> <!-- #branding -->

                <nav id="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <ul class="horizontal-navigation">
                        <li class="menu-home active" itemprop="url"><a href="index.html" title="Home" itemprop="name">Home</a></li>
                        <li class="menu-about" itemprop="url"><a href="about.html" title="About" itemprop="name">About</a></li>
                        <li class="menu-portfolio" itemprop="url"><a href="portfolio.html" title="Portfolio" itemprop="name">Portfolio</a></li>
                        <li class="menu-blog" itemprop="url"><a href="blog.html" title="Blog" itemprop="name">Blog</a></li>
                        <li class="menu-contact" itemprop="url"><a href="contact.html" title="Contact" itemprop="name">Contact</a></li>
                    </ul>
                </nav> <!-- #main-menu -->

            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #site-header -->


</div> <!-- #masthead -->


<section id="promo" class="promo section offset-header">
    <div class="container text-center">
        <h2 class="title">Test <span class="highlight">Theme</span></h2>
        <p class="intro">Hello. This is a first try to adopt theme on wordpress</p>
        <div class="btns">
            <a class="btn btn-cta-secondary" href="https://github.com/tereshchenkomax/test_theme" target="_blank">Github</a>

        </div>

    </div><!--//container-->

</section><!--//promo-->