<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<?php 
$first_name = get_the_author_meta('first_name');
$last_name = get_the_author_meta('last_name');
?>
<p class="blog-details"><b>Date: </b><?php echo get_the_date();?></p>
<p class="blog-details-name"><b>Author:</b> <?php echo $first_name.' '.$last_name;?></p>
<?php the_content() ;?>

<?php endwhile; else: endif;?>