<?php get_header(); ?>

<div class="single-post-area fix">
    <div class="single-post-left">
        <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="">
        <div class="single-post-left-content">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
        </div>



        <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
        ?>
        
        
            <!-- author-area start -->
            <div class="author-area">
                <div class="author-img-left">
                    <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="">
                </div>

                <div class="author-content-right">
                    <p><strong>Author Name:</strong> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p> 
                    <p><strong>Author Emial:</strong> <?php the_author_meta('email'); ?></p>
                    <p><strong>Date:</strong> <?php the_date('F d'); ?></p>
                    <p><strong>Author Description:</strong> <?php the_author_meta('description'); ?></p>
                </div>
            </div>
            <!-- author-area end -->
            
        <?php

            }

            wp_reset_postdata();
        }

        ?>
    </div>

    <div class="single-post-right">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>


<?php get_footer(); ?>