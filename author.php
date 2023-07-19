<?php get_header(); ?>

<!-- Services Start Here -->
<div class="services">
    <!-- Page Banner Start Here -->
    <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
        <h2><?php wp_title(); ?></h2>
    </div>
    <!-- Page Banner End Here -->

    <div class="service service-page fix" style="margin-top: 40px;">
        <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
        <div class="single-service blogs">
            <h4><?php the_title();?></h4>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
            </a>

            <p>
                <?php the_author_posts_link();?> | <?php the_date('F d');?> | <?php the_category();?>
            </p>

            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">read more</a>
        </div>

        <?php
                    }
                    wp_reset_postdata();
                }
            ?>
    </div>
</div>
<!-- Services End Here -->

<?php get_footer(); ?>
