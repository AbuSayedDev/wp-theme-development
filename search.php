<?php get_header(); ?>



    <!-- Page Banner Start Here -->
    <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
        <h2><?php wp_title(); ?></h2>
    </div>
    <!-- Page Banner End Here -->


<div style="margin-top:40px" <?php post_class(array('service', 'service-page', 'fix')); ?> >
<?php 
    $s = get_search_query();
    $args = array(
        's'=> $s
    );

    // The Query
    $the_query = new WP_Query($args);
    
    if($the_query->have_posts()){
        while($the_query->have_posts()){
            $the_query->the_post();

    ?>

        <div class="single-service blogs">
            <h4><?php the_title();?></h4>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?></a>
            
            <p><?php the_author_posts_link();?> | <?php the_date('F d');?> | <?php the_category(' ', 1);?></p>

            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">read more</a>
        </div>

    <?php

        }
        wp_reset_postdata( );
    }else {

        ?>
        <h4 style="padding-left:10px">Not Found</h4>
            <p style="padding:10px">Sorry, no posts matched your criteria.</p>

        <?php }
?>
</div>


<?php get_footer(); ?>

