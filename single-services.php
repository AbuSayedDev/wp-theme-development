<?php get_header(); ?>


<div class="single-post-area fix">
    <div class="single-post-left">
        <div class="single-post-left-content">
            <img src="<?php the_post_thumbnail_url( ); ?>" alt="image" />
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
            <ul>
                <li><strong>Sale Price:</strong> <?php echo get_post_meta(get_the_ID(), 'sale_price', true ); ?></li>
                <li><strong>Regular Price:</strong> <del><?php echo get_post_meta(get_the_ID(), 'regular_price', true ); ?></del></li>
            </ul>
        </div>
    </div>

    <div class="single-post-right">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>



<?php get_footer(); ?>