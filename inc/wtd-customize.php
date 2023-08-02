<?php 


//  $wp_customize
function wtdtheme_customize_register( $wp_customize ) {

    $wp_customize->add_section('home_banner_section',  array(
        'title'=> __('Banner Title', 'wtdtextdomain'),
        'priority' => 20,
    ));

    // banner heading setting
    $wp_customize->add_setting('banner_heading', array(
        'default' => __('WordPress Theme Development', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // banner heading control
    $wp_customize->add_control('banner_heading_ctr', array(
        'label' => __('Heading', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_heading',
        'section' => 'home_banner_section'
    ));


    // banner heading color setting
    $wp_customize->add_setting('banner_heading_color', array(
        'default' => '#fff',
        'transport' => 'postMessage', // or postMessage
    ));

    // banner heading color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'header_color', array(
            'label'      => __( 'Header Text Color', 'wtdtextdomain' ),
            'settings' => 'banner_heading_color',
            'section' => 'home_banner_section'
        ) ) 
    );


    // banner description setting
    $wp_customize->add_setting('banner_desc', array(
        'default' => __('Description', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // banner description control
    $wp_customize->add_control('banner_desc_ctr', array(
        'label' => __('Description', 'wtdtextdomain'),
        'type' => 'textarea',
        'settings' => 'banner_desc',
        'section' => 'home_banner_section'
    ));

    // banner description color setting
    $wp_customize->add_setting('banner_desc_color', array(
        'default' => '#fff',
        'transport' => 'postMessage', // or postMessage
    ));

    // banner description color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'description_color', array(
            'label'      => __( 'Description Color', 'wtdtextdomain' ),
            'settings' => 'banner_desc_color',
            'section' => 'home_banner_section'
        ) )
    );


    // banner btn setting
    $wp_customize->add_setting('banner_btn', array(
        'default' => __('Button', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // banner btn control
    $wp_customize->add_control('banner_btn_ctr', array(
        'label' => __('Button', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_btn',
        'section' => 'home_banner_section'
    ));

    // banner btn background color setting
    $wp_customize->add_setting('banner_btn_background_color', array(
        'default' => '#008080',
        'transport' => 'postMessage', // or postMessage
    ));

    // banner btn background color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'button_bg_color', array(
            'label'      => __( 'Button Background Color', 'wtdtextdomain' ),
            'settings' => 'banner_btn_background_color',
            'section' => 'home_banner_section'
        ) )
    );

    // banner btn link setting
    $wp_customize->add_setting('banner_btn_link', array(
        'default' => __('https://abusayeddev.com/', 'wtdtextdomain'),
        'transport' => 'postMessage', // or postMessage
    ));

    // banner btn link control
    $wp_customize->add_control('banner_btn_link_ctr', array(
        'label' => __('Button Link', 'wtdtextdomain'),
        'type' => 'url',
        'settings' => 'banner_btn_link',
        'section' => 'home_banner_section'
    ));

    // banner image setting
    $wp_customize->add_setting('banner_image', array(
        'transport' => 'postMessage', // or postMessage
    ));

    // banner image control
    $wp_customize ->add_control(new WP_Customize_Image_Control($wp_customize, 
        'banner_image', array(
            'label' => __('Upload a Banner Image', 'wtdtextdomain'),
            'settings' => 'banner_image',
            'section' => 'home_banner_section'


        ))
    );





}

add_action( 'customize_register', 'wtdtheme_customize_register' );


?>