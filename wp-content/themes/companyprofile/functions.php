<?php 

function load_css() 
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', 
    array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{

    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
    'jquery', false, true);
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts','load_js');

//theme Options
add_theme_support('menus');
$args = array(
    'default-color' => 'ffffff',
    'default-image' => get_template_directory_uri() . '/assets/img/main-bg.png',
    'default-repeat' => 'no-repeat'
);
add_theme_support( 'custom-background',$args );
add_theme_support('post-thumbnails');


function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//menus

register_nav_menus(
    array(
        'main-menu' => 'Main Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

add_action('wp_ajax_enquiry', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');

function enquiry_form()
{   
    $formData = [];
    wp_parse_str($_POST['enquiry'], $formData);

    //Admin Email
    $admin_email = get_option('admin_email');

    //Email Headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From:'. $admin_email;
    $headers[] = 'Reply-to:' . $formData['email'];

    //send to
    $send_to = $admin_email;

    //Subject

    $subject = "Enquiry from ". $formData['fname']. ' ' .$formData['lname'];

    //Message
    $message ='';
    foreach($formData as $index => $field)
    {
        $message .='<strong>'.$index.'</strong>'. $field . '<br/>';
    }

    try{
        if(wp_mail($send_to, $subject, $message, $headers))
        {
            wp_send_json_success("email sent");
        }else{
            wp_send_json_error("Email Error");
        }
    } catch (Exception $e){
        wp_send_json_error($e->getMessage());
    }

    
}

function service_post()
{   
    $args = array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-hammer',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),

    );
    register_post_type('services', $args);

}

add_action('init', 'service_post');

function services_taxonomy()
{

    $args = array(
        'labels' => array(
            'name' => 'Service Types',
            'singular_name' => 'Service Type'
        ),
        "public" => true,
        'hierarchical' => true
    );

    register_taxonomy('types', array('services'),$args);

}

add_action('init', 'services_taxonomy');


function add_homepage_custom_fields(){
    add_meta_box(
        'homepage_custom_fields',
        'Homepage Custom Fields',
        'render_homepage_custom_fields',
        'page',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes','add_homepage_custom_fields');

function render_homepage_custom_fields($post) 
{
    $phone_value = get_post_meta($post->ID, 'homepage_phone_value', true);
    $email_value = get_post_meta($post->ID, 'homepage_email_value', true);
    $address_value = get_post_meta($post->ID, 'homepage_address_value', true);
    $work_value = get_post_meta($post->ID, 'homepage_work_value', true);
    $hero_text_value = get_post_meta($post->ID, 'homepage_hero_text_value', true);
    $excellence1_value = get_post_meta($post->ID, 'homepage_excellence1_value',true);
    $excellence2_value = get_post_meta($post->ID, 'homepage_excellence2_value',true);
    $excellence3_value = get_post_meta($post->ID, 'homepage_excellence3_value',true);
    $excellence4_value = get_post_meta($post->ID, 'homepage_excellence4_value',true);
    $google_rating_value = get_post_meta($post->ID, 'homepage_google_rating_value',true);
    $button1_text_value = get_post_meta($post->ID, 'homepage_button1_text_value',true);
    $button1_link_value = get_post_meta($post->ID, 'homepage_button1_link_value',true);
    $button2_text_value = get_post_meta($post->ID, 'homepage_button2_text_value',true);
    $button2_link_value = get_post_meta($post->ID, 'homepage_button2_link_value',true);
    $s2_subtitle_value = get_post_meta($post->ID, 'homepage_s2_subtitle_value',true);
    $s2_title_value = get_post_meta($post->ID, 'homepage_s2_title_value',true);
    $s2_description_value = get_post_meta($post->ID, 'homepage_s2_description_value',true);
    $s3_subtitle_value = get_post_meta($post->ID, 'homepage_s3_subtitle_value',true);
    $s3_title_value = get_post_meta($post->ID, 'homepage_s3_title_value',true);
    $s3_description_value = get_post_meta($post->ID, 'homepage_s3_description_value',true);
    $s4_subtitle_value = get_post_meta($post->ID, 'homepage_s4_subtitle_value',true);
    $s4_title_value = get_post_meta($post->ID, 'homepage_s4_title_value',true);
    $s4_description_value = get_post_meta($post->ID, 'homepage_s4_description_value',true);
    $s5_subtitle_value = get_post_meta($post->ID, 'homepage_s5_subtitle_value',true);
    $s5_title_value = get_post_meta($post->ID, 'homepage_s5_title_value',true);
    $s5_description_value = get_post_meta($post->ID, 'homepage_s5_description_value',true);

    ?>
    <h3>Contact Info:</h3> 
    <label>Company Phone Number :</label>
    <input type="text" id="homepage_phone_value" name="homepage_phone_value" value="<?php echo esc_attr($phone_value); ?>"><br/><br/>
    <label>Company Email :</label>
    <input type="text" id="homepage_email_value" name="homepage_email_value" value="<?php echo esc_attr($email_value); ?>"><br/>
    <label>Company Address :</label>
    <input type="text" id="homepage_address_value" name="homepage_address_value" value="<?php echo esc_attr($address_value); ?>"><br/><br/>
    <label>Company Business Hours :</label>
    <input type="text" id="homepage_work_value" name="homepage_work_value" value="<?php echo esc_attr($work_value); ?>"><br/><br/>
    
    <h3>Hero Section: </h3>
    <label>Hero Text :</label>
    <input type="text" id="homepage_hero_text_value" name="homepage_hero_text_value" value="<?php echo esc_attr($hero_text_value); ?>"><br/><br/>
    <label>Excellence 1:</label>
    <input type="text" id="homepage_excellence1_value" name="homepage_excellence1_value" value="<?php echo esc_attr($excellence1_value); ?>"><br/><br/>
    <label>Excellence 2:</label>
    <input type="text" id="homepage_excellence2_value" name="homepage_excellence2_value" value="<?php echo esc_attr($excellence2_value); ?>"><br/><br/>
    <label>Excellence 3:</label>
    <input type="text" id="homepage_excellence3_value" name="homepage_excellence3_value" value="<?php echo esc_attr($excellence3_value); ?>"><br/><br/>
    <label>Excellence 4:</label>
    <input type="text" id="homepage_excellence4_value" name="homepage_excellence4_value" value="<?php echo esc_attr($excellence4_value); ?>"><br/><br/>
    <label>Google Rating:</label>
    <input type="text" id="homepage_google_rating_value" name="homepage_google_rating_value" value="<?php echo esc_attr($google_rating_value); ?>"><br/><br/>
    <label>Button 1 Text:</label>
    <input type="text" id="homepage_button1_text_value" name="homepage_button1_text_value" value="<?php echo esc_attr($button1_text_value); ?>"><br/><br/>
    <label>Button 1 Link:</label>
    <input type="text" id="homepage_button1_link_value" name="homepage_button1_link_value" value="<?php echo esc_attr($button1_link_value); ?>"><br/><br/>
    <label>Button 2 Text:</label>
    <input type="text" id="homepage_button2_text_value" name="homepage_button2_text_value" value="<?php echo esc_attr($button2_text_value); ?>"><br/><br/>
    <label>Button 2 Link:</label>
    <input type="text" id="homepage_button2_link_value" name="homepage_button2_link_value" value="<?php echo esc_attr($button2_link_value); ?>"><br/><br/>
    <h3>Second Section:</h3>
    <label>Title:</label>
    <input type="text" id="homepage_s2_title_value" name="homepage_s2_title_value" value="<?php echo esc_attr($s2_title_value); ?>"><br/><br/>
    <label>Subtitle:</label>
    <input type="text" id='homepage_s2_subtitle_value' name='homepage_s2_subtitle_value' value="<?php echo esc_attr($s2_subtitle_value); ?>"><br/><br/>
    <label>Description:</label>
    <textarea type="textarea" id='homepage_s2_description_value' name='homepage_s2_description_value' value="<?php echo esc_attr($s2_description_value); ?>"><?php echo esc_attr($s2_description_value); ?></textarea><br/><br/>
    <h3>Third Section:</h3>
    <label>Title:</label>
    <input type="text" id="homepage_s3_title_value" name="homepage_s3_title_value" value="<?php echo esc_attr($s3_title_value); ?>"><br/><br/>
    <label>Subtitle:</label>
    <input type="text" id='homepage_s3_subtitle_value' name='homepage_s3_subtitle_value' value="<?php echo esc_attr($s3_subtitle_value); ?>"><br/><br/>
    <label>Description:</label>
    <textarea type="textarea" id='homepage_s3_description_value' name='homepage_s3_description_value' value="<?php echo esc_attr($s3_description_value); ?>"><?php echo esc_attr($s3_description_value); ?></textarea><br/><br/>
    
    <h3>Fourth Section:</h3>
    <label>Title:</label>
    <input type="text" id="homepage_s4_title_value" name="homepage_s4_title_value" value="<?php echo esc_attr($s4_title_value); ?>"><br/><br/>
    <label>Subtitle:</label>
    <input type="text" id='homepage_s4_subtitle_value' name='homepage_s4_subtitle_value' value="<?php echo esc_attr($s4_subtitle_value); ?>"><br/><br/>
    <label>Description:</label>
    <textarea type="textarea" id='homepage_s4_description_value' name='homepage_s4_description_value' value="<?php echo esc_attr($s4_description_value); ?>"><?php echo esc_attr($s4_description_value); ?></textarea><br/><br/>
    
    <h3>Fifth Section:</h3>
    <label>Title:</label>
    <input type="text" id="homepage_s5_title_value" name="homepage_s5_title_value" value="<?php echo esc_attr($s5_title_value); ?>"><br/><br/>
    <label>Subtitle:</label>
    <input type="text" id='homepage_s5_subtitle_value' name='homepage_s5_subtitle_value' value="<?php echo esc_attr($s5_subtitle_value); ?>"><br/><br/>
    <label>Description:</label>
    <textarea type="textarea" id='homepage_s5_description_value' name='homepage_s5_description_value' value="<?php echo esc_attr($s5_description_value); ?>"><?php echo esc_attr($s5_description_value); ?></textarea><br/><br/>
    
    <?php

}


function save_homepage_custom_fields_values($post_id)
{
    $fields = [
        'homepage_phone_value', 
        'homepage_email_value', 
        'homepage_address_value', 
        'homepage_work_value', 
        'homepage_hero_text_value',
        'homepage_excellence1_value',
        'homepage_excellence2_value',
        'homepage_excellence3_value',
        'homepage_excellence4_value',
        'homepage_google_rating_value',
        'homepage_button1_text_value',
        'homepage_button1_link_value',
        'homepage_button2_text_value',
        'homepage_button2_link_value',
        'homepage_s2_title_value',
        'homepage_s2_subtitle_value',
        'homepage_s2_description_value',
        'homepage_s3_title_value',
        'homepage_s3_subtitle_value',
        'homepage_s3_description_value',
        'homepage_s4_title_value',
        'homepage_s4_subtitle_value',
        'homepage_s4_description_value',
        'homepage_s5_title_value',
        'homepage_s5_subtitle_value',
        'homepage_s5_description_value'
    
    ]; // Add more field names here

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta(
                $post_id,
                $field,
                sanitize_text_field($_POST[$field])
            );
        }
    }
}

add_action('save_post', 'save_homepage_custom_fields_values');