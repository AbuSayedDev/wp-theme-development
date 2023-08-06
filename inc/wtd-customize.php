<?php 


//  $wp_customize
function wtdtheme_customize_register( $wp_customize ) {

    $wp_customize->add_section('home_banner_section',  array(
        'title'=> __('Banner Title', 'wtdtextdomain'),
        'priority' => 20,
    ));
    //Home Banner Section END

    // Banner heading setting
    $wp_customize->add_setting('banner_heading', array(
        'default' => __('WordPress Theme Development', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner heading control
    $wp_customize->add_control('banner_heading_ctr', array(
        'label' => __('Heading', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_heading',
        'section' => 'home_banner_section'
    ));

    //Banner Heading Selective Refresh
    $wp_customize->selective_refresh->add_partial( 'banner_heading_selective_refresh', 
        array(
            'selector' => '.content-area h2',
            'settings' => 'banner_heading',
            'section' => 'home_banner_section',
            'render_callback' => function(){
                return get_theme_mod('banner_heading');
            }
        ) 
    );

    // Banner Heading color setting
    $wp_customize->add_setting('banner_heading_color', array(
        'default' => '#fff',
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Heading color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'header_color', array(
            'label'      => __( 'Header Text Color', 'wtdtextdomain' ),
            'settings' => 'banner_heading_color',
            'section' => 'home_banner_section'
        ) ) 
    );
    //Banner Deading END


    // Banner Description setting
    $wp_customize->add_setting('banner_desc', array(
        'default' => __('Description', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Description control
    $wp_customize->add_control('banner_desc_ctr', array(
        'label' => __('Description', 'wtdtextdomain'),
        'type' => 'textarea',
        'settings' => 'banner_desc',
        'section' => 'home_banner_section'
    ));

    // Banner Description color setting
    $wp_customize->add_setting('banner_desc_color', array(
        'default' => '#fff',
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Description color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'description_color', array(
            'label'      => __( 'Description Color', 'wtdtextdomain' ),
            'settings' => 'banner_desc_color',
            'section' => 'home_banner_section'
        ) )
    );

    //Banner Description Selective Refresh
    $wp_customize->selective_refresh->add_partial( 'banner_desc_selective_refresh', 
        array(
            'selector' => '.content-area p',
            'settings' => 'banner_desc',
            'section' => 'home_banner_section',
            'render_callback' => function(){
                return get_theme_mod('banner_desc');
            }
        ) 
    );
    //Banner Description END


    // Banner Button setting
    $wp_customize->add_setting('banner_btn', array(
        'default' => __('Button', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Button control
    $wp_customize->add_control('banner_btn_ctr', array(
        'label' => __('Button', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_btn',
        'section' => 'home_banner_section'
    ));

    // Banner Button background color setting
    $wp_customize->add_setting('banner_btn_background_color', array(
        'default' => '#008080',
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Button background color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'button_bg_color', array(
            'label'      => __( 'Button Background Color', 'wtdtextdomain' ),
            'settings' => 'banner_btn_background_color',
            'section' => 'home_banner_section'
        ) )
    );

    //Banner Button Selective Refresh
    $wp_customize->selective_refresh->add_partial( 'banner_btn_selective_refresh', 
        array(
            'selector' => '.content-area a',
            'settings' => 'banner_btn',
            'section' => 'home_banner_section',
            'render_callback' => function(){
                return get_theme_mod('banner_btn');
            }
        ) 
    );
    //Banner Button END


    // Banner Button Link setting
    $wp_customize->add_setting('banner_btn_link', array(
        'default' => __('https://abusayeddev.com/', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Button Link control
    $wp_customize->add_control('banner_btn_link_ctr', array(
        'label' => __('Button Link', 'wtdtextdomain'),
        'type' => 'url',
        'settings' => 'banner_btn_link',
        'section' => 'home_banner_section'
    ));
    //Banner Button Link END



    // Banner Image setting
    $wp_customize->add_setting('banner_image', array(
        'transport' => 'postMessage', // or postMessage
    ));

    // Banner Image control
    $wp_customize ->add_control(new WP_Customize_Image_Control($wp_customize, 
        'banner_image', array(
            'label' => __('Upload a Banner Image', 'wtdtextdomain'),
            'settings' => 'banner_image',
            'section' => 'home_banner_section'
        ))
    );
    //Banner Image END



    //Theme Custom Login Page
    $wp_customize->add_section('custom_login',  array(
        'title'=> __('Custom Login', 'wtdtextdomain'),
        'priority' => 30,
    ));

    //Login logo
    $wp_customize->add_setting('custom_login_logo', array(
        'default' => get_template_directory_uri(). '/assets/img/Favicon.png',
        'transport' => 'postMessage', // or postMessage
    ));

    $wp_customize ->add_control(new WP_Customize_Image_Control($wp_customize, 
        'custom_login_image', array(
            'label' => __('Logo Upload', 'wtdtextdomain'),
            'settings' => 'custom_login_logo',
            'section' => 'custom_login'
        ))
    );

    //Login Background Image
    $wp_customize->add_setting('custom_login_bg', array(
        'default' => get_template_directory_uri(). '/assets/img/page-bannar.jpg',
        'transport' => 'postMessage', // or postMessage
    ));

    $wp_customize ->add_control(new WP_Customize_Image_Control($wp_customize, 
        'custom_login_bg_image', array(
            'label' => __('Upload Background', 'wtdtextdomain'),
            'settings' => 'custom_login_bg',
            'section' => 'custom_login'
        ))
    );

    //Login Button color
    $wp_customize->add_setting('custom_login_button_color', array(
        'default' => '#000000',
        'transport' => 'postMessage', // or postMessage
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'logo_btn_bg_color', array(
            'label'      => __( 'Button Background Color', 'wtdtextdomain' ),
            'settings' => 'custom_login_button_color',
            'section' => 'custom_login'
        ) )
    );

    //Login Button Hover color
    $wp_customize->add_setting('custom_login_button_hov_color', array(
        'default' => '#C12428',
        'transport' => 'postMessage', // or postMessage
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'logo_btn_bg_hov_color', array(
            'label'      => __( 'Button Background Hover Color', 'wtdtextdomain' ),
            'settings' => 'custom_login_button_hov_color',
            'section' => 'custom_login'
        ) )
    );


}

add_action( 'customize_register', 'wtdtheme_customize_register' );


?>