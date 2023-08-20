<?php 
/**
 * Template Name: Template Home
 * 
 */

 get_header();
?>

<!-- Banner Start Here -->
<div class="banner home-banner" style="background-image:url('<?php echo get_theme_mod('banner_image'); ?>');">
    <div class="content-area">
        <h2><?php echo get_theme_mod('banner_heading'); ?></h2>
        <p><?php echo get_theme_mod('banner_desc'); ?></p>
        <a href="<?php echo get_theme_mod('banner_btn_link'); ?>"><?php echo get_theme_mod('banner_btn'); ?></a>
    </div>
</div>
<!-- Banner End Here -->

<!-- Services Start Here -->
<?php get_template_part('template-parts/content', 'services'); ?>
<!-- Services End Here -->

<!-- About Start Here -->
<div class="about fix" id="about">
    <div class="about-left">
        <div class="about-left-content">
            <h4>about us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
            <a href="about.html" class="btn">read more</a>
        </div>

        <div class="service service-page fix">
            <div class="about-left-blog">
                <h4>Latest Post</h4>

                <?php

                $args = array(
                    'post_type'=> 'post', 
                    'posts_per_page' => 2,
                    'order' => 'DESC',
                    // 'cat' => 4,
                    // 'cat' => array(4,7)
                    // 'order' => 'ASC',
                    // 'orderby' => 'rand',
                    // 'category_name' => array( 'web-design, fashion'),
                    
                 ); 
                    
                    $query = new WP_Query($args); 
                    
                    if($query->have_posts()){ 
                        while($query->have_posts()){ 
                            
                            $query->the_post(); ?>

                <div class="single-service blogs">
                    <h4><?php the_title();?></h4>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                    </a>

                    <p><?php the_author_posts_link();?> | <?php the_date('F d');?> | <?php the_category();?></p>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn">read more</a>
                </div>

                <?php  }

                        wp_reset_postdata();

                    }else{ ?>

                <p>No Post</p>

                <?php  } 
            ?>
            </div>
        </div>


        <!-- redux -->
        <div class="redux-content">
            <h1>Redux Content show</h1>
            <img src="<?php echo $redux_demo['opt-media']['url']?>" style="margin:30px 0">
            <h3><?php echo $redux_demo['opt-text']; ?></h3>
            <p><?php echo $redux_demo['opt-textarea']; ?></p>



            <div class="redux_gallery">
            <?php

                $gallery = $redux_demo['opt-gallery'];
                $gallerys = explode(',',  $gallery);

                foreach ($gallerys as $image){
                    $single_image = wp_get_attachment_image_src($image);

                    ?>
                            <img src="<?php echo $single_image[0] ?>" style="margin:30px 0">
                        
                    <?php
                }
            
            ?>

            </div>
        </div>
    </div>

    <!-- sidebar -->
    <?php get_sidebar(); ?>
</div>
<!-- About End Here -->



<?php get_footer(); ?>
