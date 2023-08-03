<?php 
/**
 * Template Name: Template Services
 * 
 */

get_header(); ?>

<!-- Page Banner Start Here -->
<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
    <h2><?php wp_title(); ?></h2>
</div>
<!-- Page Banner End Here -->

<!-- Services Start Here -->
<div class="services">
    <div class="title">
        <h4>exclusive services</h4>
    </div>
    <div class="service service-page fix">

    <?php 

        $args = array(
            'post_type'     => 'services',
            'post_per_page' => 10,
            'order'         => 'DESC'
        );

        $query = new WP_Query($args);

        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
     ?>

        <div class="single-service">
            <h4><?php the_title(); ?></h4>
            <img src="<?php the_post_thumbnail_url( );?>" alt="Service 1" />
            <p><?php the_content(); ?></p>
            <ul>
                <li><strong>Sale Price:</strong> <?php echo get_post_meta(get_the_ID(), 'sale_price', true ); ?></li>
                <li><strong>Regular Price:</strong> <del><?php echo get_post_meta(get_the_ID(), 'regular_price', true ); ?></del></li>
            </ul>
            <a href="<?php the_permalink(); ?>" class="btn">read more</a>
        </div>

    <?php  wp_reset_postdata(); } 
        }else{ ?>
            <p>No Service Post</p>
    <?php    }
    
    ?>



        
    </div>
</div>
<!-- Services End Here -->


<?php get_footer();?>



