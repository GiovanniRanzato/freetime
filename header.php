<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <!-- <script src="https://kit.fontawesome.com/b2fa7f74dd.js" crossorigin="anonymous"></script> -->
    <!-- google fonts awesome -->
    <!-- TODO: Add to autooptimize plugin
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>   
    -->
    <?php wp_head() ?>   
</head>

<body <?php body_class() ?>  >
    <header class="cs-header">
        <div class="cs-header-container cs-container">
            <div class="cs-logo">
                <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo TEMPLATE_URI ?>media/logo.png" alt="logo" class="cs-logo"></a>
            </div>
            <?php wp_nav_menu( array(
                "theme_location" => "primary",
                "menu_class" => "cs-nav",
                "container_class" => "cs-main-nav",
            ));             
            ?>
            <div class="cs-mobile-only">
            <div class="cs-menu-toggler hamburger-container">
                <button id="hamburger" class="hamburger hamburger--collapse menu-toggler " type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </header>

   
        
        




       