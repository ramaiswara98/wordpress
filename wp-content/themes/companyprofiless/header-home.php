<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    
<header >
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
                    <p class='top-header-contact-info-item-title'>CALL US:</p>
                    <?php
                        $phone_value = get_post_meta(get_the_ID(), 'homepage_phone_value', true);

                        if ($phone_value) {
                            echo '<p class="top-header-contact-info-item-sub-title">' . esc_html($phone_value) . '</p>';
                        } else {
                            echo '<p class="top-header-contact-info-item-sub-title">(08)9315 5545</p>';
                        }
                    ?>
                </div>
                <div class='top-header-contact-info-item'>
                    <p class='top-header-contact-info-item-title'>EMAIL US:</p>
                    <?php
                        $email_value = get_post_meta(get_the_ID(), 'homepage_email_value', true);

                        if ($email_value) {
                            echo '<p class="top-header-contact-info-item-sub-title">' . esc_html($email_value) . '</p>';
                        } else {
                            echo '<p class="top-header-contact-info-item-sub-title">info@noprobs.com.au</p>';
                        }
                    ?>
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