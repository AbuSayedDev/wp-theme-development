<?php get_header(); ?>


<div class="page-area fix">
    <div class="page-left-area">
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
    </div>

    <div class="page-right-area">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>

<?php get_footer(); ?>