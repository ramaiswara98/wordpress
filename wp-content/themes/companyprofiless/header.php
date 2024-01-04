<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    
<header class="header-general">
    <div class='header-container'>
        <div class='top-header'>
            <div class='logo'>
            <a href="<?php echo get_site_url() ?>">
                    <img 
                        src="<?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo esc_url( $logo[0] );
                            } else {
                                echo get_template_directory_uri().'/assets/img/logo.png';
                            }
                        ?>"
                        alt="logo" 
                        class="header-logo"/>
                </a>
            </div>
            <div class='top-header-contact-info'>
                <div class='top-header-contact-info-item'>
                    <p class='top-header-contact-info-item-title'>Call US:</p>
                    <p class='top-header-contact-info-item-sub-title'>(08)9315 5545</p>
                </div>
                <div class='top-header-contact-info-item'>
                    <p class='top-header-contact-info-item-title'>EMAIL US:</p>
                    <p class='top-header-contact-info-item-sub-title'>info@noprobs.com.au</p>
                </div>
            </div>
        </div>
        <div >
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'top-menu-bar'
                )
            );
            ?>
        </div>
    </div>
</header>