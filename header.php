
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?> |
        <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
</head>

<body>

    <div class="blog-masthead">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <a href="<?php  bloginfo('url')?>" class="navbar-brand text-light"><img src="<?php bloginfo('template_url')?>/img/logo.png" width="60" class="d-inline-block align-top mr-2" alt="">
                    <h1 class="align-middle">INGENIERÍA DE SISTEMAS
                        <br>
                        <small>PAMPLONA - VILLA DEL ROSARIO</small>
                    </h1>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bars text-light"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'menu'              => 'Principal',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarCollapse',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                ); 
                ?>
            </div>
        </nav>
    </div>
