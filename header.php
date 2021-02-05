<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta <?php bloginfo( 'charset' ); ?>>
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
        <title><?php wp_title(); ?></title>
        <?php wp_head();?>
    </head>


<body <?php body_class(); ?> id="bodyMain">
    <div id="iframe-container"></div><!-- Shadow Box -->
    <div class="site-container">
        <div class="header-container">
            <header class="site-header">
                <div class="row">
                    <div class="col headerCol">
                        <h1><a class="header" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h2><?php bloginfo( 'description' ); ?></h2>
                    </div>
                    <div class="col navCol">
                        <?php wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                'menu_class' => 'nav'
                            )
                        );?>
                    </div>
                </div>
        </div>  

        </header>

