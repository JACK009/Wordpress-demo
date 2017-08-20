<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url('/') ?>">
                <?php bloginfo('name') ?>
            </a>
        </div>
        <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right'
        )) ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo home_url('/#portfolio') ?>">Portfolio</a></li>
            <li><a href="<?php echo home_url('/#about') ?>">About</a></li>
            <li><a href="<?php echo home_url('/#contact') ?>">Contact</a></li>
        </ul>
    </div>
</nav>