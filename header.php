<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mini Moocs</title>
    <meta name="description" content="">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:400,400i,700" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div id="menu" class="pull-right">
            <?php wp_nav_menu( array(
                'theme_location' => 'top',
                'menu_id'        => 'top-menu',
            ) ); ?>
        </div>
        <div id="logo" >
            <a href="/"><?php bloginfo('name'); ?></a>
        </div>
        <div class="drawer">
            <div class="drawer-handle" onclick="openDrawer()">
                <span></span>
            </div>
        </div>
        <div class="dropdown-menu" class="pull-left">
            <?php wp_nav_menu( array(
                'theme_location' => 'top',
                'menu_id'        => 'top-menu',
            ) ); ?>
        </div>
    </div>