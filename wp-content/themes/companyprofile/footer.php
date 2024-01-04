
<footer>
   <div class="row">
        <div class="col">
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
            <p class="footer-desc">Got a problem at home or at work, need an emergency plumber in Perth? Give us a call, we'll fix it no probs.</p>
            <div class="footer-socmed">
                <div class="">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/facebook.png" width="72" height="72"/>
                </div>
                <div class="">
                    <div class="col">
                    <div class="footer-google">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/google-logo.png" width="72"/>
                        <div class="footer-google-start">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/5starts.png"/>
                            <p class="google-rating-text">Google Rating</p>
                        </div>
                        
                        <p class="google-rating">
                        <?php
                                $google_rating_value = get_post_meta(get_the_ID(), 'homepage_google_rating_value', true);

                                if ($google_rating_value) {
                                    echo '<span>' . esc_html($google_rating_value) . '</span>';
                                } else {
                                    echo '<span>4.9</span>';
                                }
                            ?>
                            
                            /5.0</p>
                        
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col footer-menu">
            <p><b>Services</b></p>
        <?php wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'footer-menu-bar'
                )
            );
            ?>
        </div>
        <div class="col footer-contact">
            <p><b>Contact</b></p>
            <p>(08) 9315 5545</p>
            <p>info@noprobs.com.au</p>
            <p>3/52 Roberts St, Osborne Park WA 6017</p>
            <p>Mon - Fri: 7am - 5pm </p>
            <br/>
            <p>Privacy Policy</p>
        </div>
   </div>
   <div class="footer-copyright">
        <p>© No Probs Plumbing and Electrical | Plumbing License: PL9107 | Gas License: GF18521 | Electrical License: EC13127</p>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>