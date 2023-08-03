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


                $sale_price = get_post_meta(get_the_ID(), 'sale_price', true );
                $regular_price = get_post_meta(get_the_ID(), 'regular_price', true );
                $select_years = get_post_meta(get_the_ID(), 'select_years', true );
    ?>

            <div class="single-service">
                <h4><?php the_title(); ?></h4>
                <img src="<?php the_post_thumbnail_url( ); ?>" alt="Service" />
                <p><?php the_content(); ?></p>
                <ul>
                    <li><strong>Sale Price:</strong> <?php if($sale_price){echo $sale_price;} ?></li>
                    <li><strong>Regular Price:</strong> <del><?php if($regular_price){echo $regular_price;} ?></del></li>
                    <li> <?php if($select_years){ echo '<strong>Year:</strong> '. $select_years;} ?></li>
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
