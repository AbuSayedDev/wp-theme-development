<?php 


//  $wp_customize
function wtdtheme_customize_register( $wp_customize ) {

    $wp_customize->add_section('home_banner_section',  array(
        'title'=> __('Banner Title', 'wtdtextdomain')
    ));


    // banner heading setting
    $wp_customize->add_setting('banner_heading', array(
        'default' => __('WordPress Theme Development', 'wtdtextdomain')
    ));

    // banner heading control
    $wp_customize->add_control('banner_heading_ctr', array(
        'label' => __('Heading Text', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_heading',
        'section' => 'home_banner_section'
    ));



    // banner description setting
    $wp_customize->add_setting('banner_desc', array(
        'default' => __('Description', 'wtdtextdomain')
    ));

    // banner description control
    $wp_customize->add_control('banner_desc_ctr', array(
        'label' => __('Description Text', 'wtdtextdomain'),
        'type' => 'text',
        'settings' => 'banner_desc',
        'section' => 'home_banner_section'
    ));

}

add_action( 'customize_register', 'wtdtheme_customize_register' );


?>