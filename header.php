<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Simple Project</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="area">
        <!-- Header Start Here -->
        <div class="header fix">
            <div class="logo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">

            <?php wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));?>
                <!-- <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul> -->
            </div>
        </div>
        <!-- Header End Here -->