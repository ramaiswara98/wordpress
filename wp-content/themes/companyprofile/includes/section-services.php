<?php
$args = array(
    'post_type' => 'services', 
    'posts_per_page' => -1,
    'order_by'=> 'date',
    'order' =>'ASC' 
    // You can add more parameters to customize the query (e.g., 'orderby', 'order', 'meta_key', 'meta_value', etc.)
);

$services_query = new WP_Query($args);


if ($services_query->have_posts()) :
    while ($services_query->have_posts()) : $services_query->the_post();
        ?>
     
        <div class="services-card" style="background-image:url('<?php if (has_post_thumbnail()) { the_post_thumbnail_url(); } else { echo get_template_directory_uri() . '/assets/img/video.png'; } ?>');background-repeat:no-repeat">
                    <div class="service-card-active">
                        <h3 class="services-card-active-title"><?php the_title();?></h3>
                        <p> <?php the_excerpt(); ?></p>
                    </div>
                    <h3 class="services-card-title"><?php the_title();?></h3>
                </div>
        <?php
    endwhile;
    wp_reset_postdata(); // Restore original post data
else :
    // If no services are found
    echo 'No services found.';
endif;
?>
