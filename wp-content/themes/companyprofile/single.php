<?php get_header(); ?>

<div class="container blog-post">

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url();?>" class="img-thumbnail img-thumbnail">
    <?php endif;?>
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('includes/section','blog'); ?>
</div>


<?php get_footer();?>