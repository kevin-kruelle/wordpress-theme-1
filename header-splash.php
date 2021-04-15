<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <title>First Custom Wordpress Theme!</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="page">
    <div id="header-container-splash">
        <div class="site-branding-splash">
            <p class="site-title-splash">
                <a href="<?php echo esc_url( home_url( '/' ) ) ;?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </p>
        </div>

        <header class="site-header" role="banner">

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php 
                $args = [
                    'theme_location' => 'main-menu'
                ]; 
                wp_nav_menu( $args );
                ?>
            </nav>

        </header>

    </div>

    <div id="content" class="site-content">
