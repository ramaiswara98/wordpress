<?php get_header('home'); ?>

        <div class="hero-section custom-background" >
            <div class="hero-title-container">
                <?php
                    $hero_text_value = get_post_meta(get_the_ID(), 'homepage_hero_text_value', true);

                    if ($hero_text_value) {
                        echo '<h1 class="hero-title-text">' . esc_html($hero_text_value) . '</h1>';
                    } else {
                        echo '<h1 class="hero-title-text">Emergency Plumber Perth</h1>';
                    }
                ?>
            </div>
                <div class="hero-benefit">
                    <div class="hero-benefit-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/SealCheck.png" alt="seal-check"/>
                        <?php
                            $excellence1_text_value = get_post_meta(get_the_ID(), 'homepage_excellence1_value', true);

                            if ($excellence1_text_value) {
                                echo '<p>' . esc_html($excellence1_text_value) . '</p>';
                            } else {
                                echo '<p>Local Plumber / Gas Fitter to Your Doorsa</p>';
                            }
                        ?>
                    </div>
                    <div class="hero-benefit-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/SealCheck.png" alt="seal-check"/>
                        <?php
                            $excellence2_text_value = get_post_meta(get_the_ID(), 'homepage_excellence2_value', true);

                            if ($excellence2_text_value) {
                                echo '<p>' . esc_html($excellence2_text_value) . '</p>';
                            } else {
                                echo '<p>The Price We Quote is the Price You Pay-Guaranteeds!</p>';
                            }
                        ?>
                    </div>
                    <div class="hero-benefit-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/SealCheck.png" alt="seal-check"/>
                        <?php
                            $excellence3_text_value = get_post_meta(get_the_ID(), 'homepage_excellence3_value', true);

                            if ($excellence3_text_value) {
                                echo '<p>' . esc_html($excellence3_text_value) . '</p>';
                            } else {
                                echo '<p>Emergency Plumber Services</p>';
                            }
                        ?>
                    </div>
                    <div class="hero-benefit-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/SealCheck.png" alt="seal-check"/>
                        <?php
                            $excellence4_text_value = get_post_meta(get_the_ID(), 'homepage_excellence4_value', true);

                            if ($excellence4_text_value) {
                                echo '<p>' . esc_html($excellence4_text_value) . '</p>';
                            } else {
                                echo '<p>Same Day Hot Waters</p>';
                            }
                        ?>
                    </div>
                </div>
            <div class="hero-bottom">
                <div class="hero-bottom-left-side">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/google-logo.png" alt="google-logo"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/5starts.png" alt="google-logo"/>
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
                    <p class="google-rating-text">Google Rating</p>
                </div>
                <div class="hero-bottom-right-side">
                    <a 
                        href="<?php
                            $button1_link_value = get_post_meta(get_the_ID(), 'homepage_button1_link_value', true);

                            if ($button1_link_value) {
                                echo  esc_html($button1_link_value);
                            } else {
                                echo '#';
                            }
                        ?>" 
                        class="primary-button">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupblack.png"/>
                        <?php
                            $button1_text_value = get_post_meta(get_the_ID(), 'homepage_button1_text_value', true);

                            if ($button1_text_value) {
                                echo  esc_html($button1_text_value);
                            } else {
                                echo 'Schedule a Job';
                            }
                        ?>
                    
                    </a>
                    <a 
                        href="<?php
                                $button2_link_value = get_post_meta(get_the_ID(), 'homepage_button2_link_value', true);

                                if ($button2_link_value) {
                                    echo  esc_html($button2_link_value);
                                } else {
                                    echo '#';
                                }
                            ?>" 
                        class="secondary-button">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupgreen.png"/>
                        <?php
                            $button2_text_value = get_post_meta(get_the_ID(), 'homepage_button2_text_value', true);

                            if ($button2_text_value) {
                                echo  esc_html($button2_text_value);
                            } else {
                                echo 'Call Us Now';
                            }
                        ?>
                    </a>
                </div>
            </div>
        </div>


        <div class ="second-section">
            <div class="second-section-left-side">
                <?php
                    $s2_subtitle_value = get_post_meta(get_the_ID(), 'homepage_s2_subtitle_value', true);

                    if ($s2_subtitle_value) {
                        echo  '<p class="second-section-left-side-subtitle">'.esc_html($s2_subtitle_value).'</p>';
                    } else {
                        echo '<p class="second-section-left-side-subtitle">EMERGENCY PLUMBING PERT</p>';
                        }
                ?>
                <?php
                    $s2_title_value = get_post_meta(get_the_ID(), 'homepage_s2_title_value', true);

                    if ($s2_title_value) {
                        echo  '<h3>'.esc_html($s2_title_value).'</h3>';
                    } else {
                        echo '<h3>No Probs plumbing & electrical</h3>';
                        }
                ?>
                <?php
                    $s2_description_value = get_post_meta(get_the_ID(), 'homepage_s2_description_value', true);

                    if ($s2_description_value) {
                        echo  '<p>'.esc_html($s2_description_value).'</p>';
                    } else {
                        echo `<p>Wea're yours local Perth plumber and gas-fitting specialists. Together, we're a team of reliable plumbers with a knack for the job. Got a problem at home or at work, need an emergency plumber in Perth? Give us a call, we'll fix it no probs.</p>`;
                        }
                ?>
              <div>
                <div class="hero-bottom-right-side">
                    <a href="#" class="primary-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupblack.png"/>Schedule a Job</a>
                    <a href="#" class="secondary-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupgreen.png"/>Call us now</a>
                </div>
                </div>
            </div>
            <div class="second-section-right-side">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/Video.png" class="second-section-image"/>
            </div>
        </div>

        <div class="third-section">
            <div class="third-section-top">
                <div class="third-section-top-left">
                    <h3>Why</h3>
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/second-logo.png" class="logo2"/>
                </div> 
                <div class="third-section-top-right">
                    <p>As your trusted local emergency plumbers, we're here to solve your plumbing problem. With over 40 years of combined experience servicing the Perth area, we know it like the back of our hand - how to deal with the calcium and the unique challenges the region has. \n What does that mean for you? It means we’re able to sort your issue out quickly, efficiently and properly. No probs.</p>
                </div> 
            </div>
            <div class="third-section-bottom">
                <div class="third-section-bottom-item">
                    <h3>Here for you</h3>
                    <p>Available Monday to Friday, 7 am to 5 pm, our emergency plumbers are standing by and ready to assist you. Call us now on 08 9315 5545. We'll be there.</p>
                </div>
                <div class="third-section-bottom-item">
                    <h3>5 star service</h3>
                    <p>Your dependable local Perth plumber with over 300 5 star reviews from happy clients.</p>
                </div>
                <div class="third-section-bottom-item">
                    <h3>No Problem too big or too small</h3>
                    <p>No Probs is your number one solution for all plumbing problems at your home or business. We're experienced emergency plumbers in Perth, standing by to get you sorted!</p>
                </div>
                <div class="third-section-bottom-item">
                    <h3>Highest quality workmanship</h3>
                    <p>Every job we perform is completed from start to finish by trained professionals and backed by our customer service guarantee. We're not all emergency plumbing, either - if you just need someone that'll do a good job and treat you right, we're your team.</p>
                </div>
                
            </div>
            <br/><br/>
            <a href="#" class="secondary-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupgreen.png"/>Call us now</a>
        </div>

        <div class="four-section">
            <div class="four-section-top">
                <div class="four-section-top-left">
                <?php
                    $s4_subtitle_value = get_post_meta(get_the_ID(), 'homepage_s4_subtitle_value', true);

                    if ($s4_subtitle_value) {
                        echo  '<p>'.esc_html($s4_subtitle_value).'</p>';
                    } else {
                        echo `<p>GOT A PROBLEM ?</p>`;
                        }
                ?>
                <?php
                    $s4_title_value = get_post_meta(get_the_ID(), 'homepage_s4_title_value', true);

                    if ($s4_title_value) {
                        echo  '<h3>'.esc_html($s4_title_value).'</h3>';
                    } else {
                        echo `<h3>No Probs, here's how we help</h3>`;
                        }
                ?>
                    
                </div>
                <div class="four-section-top-right">
                    <?php
                        $s4_description_value = get_post_meta(get_the_ID(), 'homepage_s4_description_value', true);

                        if ($s4_description_value) {
                            echo  '<p>'.esc_html($s4_description_value).'</p>';
                        } else {
                            echo ` <p>Our expert team of Perth plumbers can diagnose and repair any residential or commercial plumbing problem you may have. Whether it's water or gas, you're safe with us.</p>`;
                            }
                    ?>
                   
                </div>
            </div>
            <div class="four-section-bottom">

            </div>
            <div class="services-container">
                <?php get_template_part('includes/section','services'); ?>
            </div>
            
        </div>
       
        
        <div class="five-section">
            <div class="five-section-left-side">
                <?php
                    $s5_subtitle_value = get_post_meta(get_the_ID(), 'homepage_s5_subtitle_value', true);

                    if ($s5_subtitle_value) {
                        echo  '<p>'.esc_html($s5_subtitle_value).'</p>';
                    } else {
                        echo `<p>YOUR PLUMBING PROBLEM NOT LISTED HERE?</p>`;
                        }
                ?>
                <?php
                    $s5_title_value = get_post_meta(get_the_ID(), 'homepage_s5_title_value', true);

                    if ($s5_title_value) {
                        echo  '<h3>'.esc_html($s5_title_value).'</h3>';
                    } else {
                        echo `<h3>No Probs. We'll fix it</h3>`;
                        }
                ?>
                
                
            </div>
            <div class="five-section-right-side">
                <?php
                    $s5_description_value = get_post_meta(get_the_ID(), 'homepage_s5_description_value', true);

                    if ($s5_description_value) {
                        echo  '<p>'.esc_html($s5_description_value).'</p>';
                    } else {
                        echo `<p>Stumped by your plumbing problem? Don't let it escalate. Call on our local Perth plumbers who you can trust will do a great job. Get a quote today and say goodbye to your plumbing woes.</p>`;
                        }
                ?>
                
                <div class="hero-bottom-right-side">
                    <a href="#" class="primary-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupblack.png"/> Schedule a Job</a>
                    <a href="#" class="secondary-button five-section-btn"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupgreen.png"/> Call us now</a>
                </div>
            </div>
            
        </div>

        <div class="section-six">
            <div class="section-six-left-side">
                <p class='subtitle'>CONTACT US</p>
                <h3 class='title'>Get in touch</h3>
                <p class="description">Call us during business hours, send us an email or fill out the quote request form and we'll be in touch as soon as possible.</p>
                <div class="section-six-left-side-item">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/ic-email.png" alt="ic-envelope" class="contact-icon"/>
                    <?php
                        $email_value = get_post_meta(get_the_ID(), 'homepage_email_value', true);

                        if ($email_value) {
                            echo  '<p >'.esc_html($email_value).'</p>';
                        } else {
                            echo '<p>info@noprobs.com.au</p>';
                            }
                    ?>
                </div>
                <div class="section-six-left-side-item">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/ic-phone.png" alt="ic-envelope" class="contact-icon"/>
                    <?php
                        $phone_value = get_post_meta(get_the_ID(), 'homepage_phone_value', true);

                        if ($phone_value) {
                            echo  '<p >'.esc_html($phone_value).'</p>';
                        } else {
                            echo '<p>info@noprobs.com.auss</p>';
                            }
                    ?>
                </div>
                <div class="section-six-left-side-item">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/ic-pin.png" alt="ic-envelope" class="contact-icon"/>
                    <?php
                        $address_value = get_post_meta(get_the_ID(), 'homepage_address_value', true);

                        if ($address_value) {
                            echo  '<p >'.esc_html($address_value).'</p>';
                        } else {
                            echo '<p>info@noprobs.com.aussssss</p>';
                            }
                    ?>
                </div>
            </div>
            <div class="section-six-right-side">
                <h3 class="title">Schedule a Jobs</h3>
                <?php get_template_part('includes/form','enquery') ?>
            </div>
        </div>
        
<div class="container">
    

    <!-- <h1><?php the_title(); ?></h1> -->
    <?php get_template_part('includes/section','content'); ?>
</div>


<?php get_footer();?>