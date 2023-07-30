<!-- Services Start Here -->
<div class="services">
    <!-- Page Banner Start Here -->
    <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
        <h2><?php wp_title(); ?></h2>
    </div>
    <!-- Page Banner End Here -->


    <div style="margin-top:40px" <?php post_class(array('service', 'service-page', 'fix')); ?> >

        <div class="blog-title-area">
            <div class="title-area-left">
                <h4>Latest Blogs</h4>
            </div>
            <div class="title-area-right">
                <p><?php get_search_form(); ?></p>
            </div>
        </div>

        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
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
                wp_reset_postdata();
            }
        ?>
    </div>
</div>
<!-- Services End Here -->
