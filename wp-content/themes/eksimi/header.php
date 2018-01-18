<?php
/**
 * Created by PhpStorm.
 * User: Mārtiņš Frīdenbergs
 * Date: 16/12/2017
 * Time: 14:00
 */
?>

<html>
    <head>
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

        <?php wp_head(); ?>

        <meta charset="utf-8">
        <title>Eksimi</title>
    </head>

    <body>
        <header>

            <div class="language-switcher row">
                <div class="container col-xs-12 col-sm-3 col-sm-offset-9 col-md-2 col-md-offset-10">
                    <i class="material-icons">language</i>
                    <div class="language-drop">
                        <?php wp_nav_menu(array('theme_location' => 'language')); ?>
                    </div>
                </div>
            </div>

            <div class="row main-menu">
                <div class="col-sm-3 col-md-3 col-xs-12 logo">
                    <img src="<?php echo get_template_directory_uri() . '/logo.png'; ?>"/>
                </div>
	            <?php wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse menu-wrap col-md-9 col-sm-9',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )); ?>
            </div>

            <div class="hidden-sm hidden-md hidden-lg mobile-menu">
                <?php wp_nav_menu(array( 'theme_location'    => 'primary')); ?>
            </div>

        </header>
