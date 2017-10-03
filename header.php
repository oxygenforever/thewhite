<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?>" type="application/rss+xml"
          rel="alternate">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div id="nav-wrapper">
            <section class="container">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'nav-menu')); ?>
            </section><!--/.container-->
        </div><!--/#nav-wrapper-->
        <div id="blog-title">
            <h1 class="brackets"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div><!--/#blog-title-->
    </header><!--/.header-->