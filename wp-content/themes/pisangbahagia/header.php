<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=bloginfo('template_url');?>/assets/img/pisangbahagia_logo2_100px.jpg">
    <?php wp_head(); ?>
</head>
<body style="overflow-y: hidden;">
    <header class="container full cont-top">
        <div class="header">
            <div class="header-title-wrap">
                <h1 class="ft header-title">
                    <?=get_bloginfo( 'name' );?>
                </h1>
                <div class="button-nav-wrap">
                    <button type="button" class="toogle view-mode" title="Mode Gelap">
                        <span></span>
                    </button>
                    <button type="button" aria-label="Search button mobile" class="btn-nav-search-top">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="navbar ft nav-link">
                <?php
                    $menu = array(
                        'menu' => 'primary',
                        'menu_class' => '',
                        'theme_location' => 'primary_menu',
                        'echo' => true
                    );
                    wp_nav_menu( $menu );
                ?>
                <div class="nav-search">
                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" name="s" class="input-search" placeholder="Cari Disini..."/>
                        <button type="submit" class="btn-nav-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>