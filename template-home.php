<?php 
/**
 * Template Name: Template Home
 * 
 */

 get_header();
?>

<!-- Banner Start Here -->
<div class="banner">
    <img src="<?php echo get_template_directory_uri( ); ?>/assets/img/bannar.jpg" alt="Banner" />
</div>
<!-- Banner End Here -->

<!-- Services Start Here -->
<?php get_template_part('template-parts/content', 'services'); ?>
<!-- Services End Here -->

<!-- About Start Here -->
<div class="about fix" id="about">
    <div class="about-left">
        <h4>about us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
        <a href="about.html" class="btn">read more</a>
    </div>

    <?php get_sidebar(); ?>
</div>
<!-- About End Here -->

<?php get_footer(); ?>
