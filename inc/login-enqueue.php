<?php

/**
 * Proper way to enqueue scripts and styles
 */


 //Login Css File 
 function wtd_login_enqueue_register(){
    // Login Style
     wp_enqueue_style( 'login-enqueue', get_stylesheet_directory_uri(). "/assets/css/login-enqueue.css", array(), "1.0.0", "all");
  }
 
  add_action( 'login_enqueue_scripts', 'wtd_login_enqueue_register' );
  
//Changing Login Form Logo
function login_logo_change(){
    ?>
        <style>
            .login #login h1 a{
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>../assets/img/Favicon.png);
            }
        </style>
    <?php   
}

add_action( 'login_enqueue_scripts', 'login_logo_change' );


//Changing Login Form Logo Url

function login_logo_url_change(){
    return home_url();
}

add_filter('login_headerurl', 'login_logo_url_change' );
?>