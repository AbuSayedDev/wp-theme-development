<!-- Services Start Here -->
<div class="services" id="services">
    <div class="title">
        <h4>exclusive services</h4>
    </div>
    <div class="service fix">

    <?php 

        $args = array(
            'post_type'     => 'services',
            'posts_per_page' => 3,
            'order'         => 'DESC'

        );

        $query = new WP_Query($args);

        if($query->have_posts()){
            while($query->have_posts(  )){
                $query->the_post();
    ?>

            <div class="single-service">
                <h4><?php the_title(); ?></h4>
                <img src="<?php the_post_thumbnail_url( ); ?>" alt="Service" />
                <p><?php the_content(); ?></p>
                <ul>
                    <li><strong>Sale Price:</strong> <?php echo get_post_meta(get_the_ID(), 'sale_price', true ); ?></li>
                    <li><strong>Regular Price:</strong> <del><?php echo get_post_meta(get_the_ID(), 'regular_price', true ); ?></del></li>
                </ul>
                <a href="<?php the_permalink( ); ?>" class="btn">read more</a>
            </div>


    <?php      

    wp_reset_postdata();  

}
        }else{  ?>
            <p>NO Services</p>
       <?php }
    ?>
    </div>
</div>
<!-- Services End Here -->
