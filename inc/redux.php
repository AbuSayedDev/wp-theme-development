<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'wtdtextdomain' ),
        'customizer'           => false,
        'dev_mode'                  => true,
        'page_priority'        => 2,
	    'show_import_export'        => true,
        'footer_credit'             => '@ <a href="https://abusayeddev.com" target="_blink">Abu Sayed</a> 2023',
    );

    

    Redux::set_args( $opt_name, $args );

    Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'Basic Field', 'wtdtextdomain' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'wtdtextdomain' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Example Text', 'wtdtextdomain' ),
                'desc'     => esc_html__( 'Example description.', 'wtdtextdomain' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'wtdtextdomain' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            ),
            array(
                'id'       => 'opt-textarea',
                'type'     => 'textarea',
                'rows' => '3',
                'title'    => esc_html__( 'Message Text', 'wtdtextdomain' ),
                'desc'     => esc_html__( 'Example description.', 'wtdtextdomain' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'wtdtextdomain' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'opt-media',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Upload Image', 'wtdtextdomain' ),
                'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'wtdtextdomain' ),
                'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader.', 'wtdtextdomain' ),
                'default' => array(
                    'url' => get_template_directory().'/assets/img/page-bannar.jpg',
                )
            ),
            array(
                'id'       => 'opt-gallery',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Add/Edit Gallery', 'wtdtextdomain' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wtdtextdomain' ),
                'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader.', 'wtdtextdomain' ),  
            )
   ) ) );


   Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'Typography', 'wtdtextdomain' ),
    'id'     => 'typography',
    'desc'   => esc_html__( 'Typography option with each property can be called individually..', 'wtdtextdomain' ),
    'icon'   => 'el el-home',
    'fields' => array(
        array( 
            'id'          => 'opt-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('H1', 'wtdtextdomain'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('h1'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Global H1 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
            'default'     => array(
                'color'       => '#333', 
                'font-style'  => '700', 
                'font-family' => 'Montserrat', 
                'google'      => true,
                'font-size'   => '36px', 
                'line-height' => '40'
            )),
            array( 
                'id'          => 'opt-typographyh2',
                'type'        => 'typography', 
                'title'       => esc_html__('H2', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h2'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global H2 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '32px', 
                    'line-height' => '40'
            )),
            array( 
                'id'          => 'opt-typographyh3',
                'type'        => 'typography', 
                'title'       => esc_html__('H3', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h3'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global H3 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '30px', 
                    'line-height' => '40'
            )),
            array( 
                'id'          => 'opt-typographyh4',
                'type'        => 'typography', 
                'title'       => esc_html__('H4', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h4'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global H4 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '28px', 
                    'line-height' => '40'
            )),
            array( 
                'id'          => 'opt-typographyh5',
                'type'        => 'typography', 
                'title'       => esc_html__('H5', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h5'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global H5 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '22px', 
                    'line-height' => '40'
            )),
            array( 
                'id'          => 'opt-typographyh6',
                'type'        => 'typography', 
                'title'       => esc_html__('H6', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h6'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global H6 Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '700', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '18px', 
                    'line-height' => '40'
                )),
            array( 
                'id'          => 'opt-typography1',
                'type'        => 'typography', 
                'title'       => esc_html__('p', 'wtdtextdomain'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('p'),
                'units'       =>'px',
                'subtitle'    => esc_html__('Global p Heading Typography option with each property can be called individually.', 'wtdtextdomain'),
                'default'     => array(
                    'color'       => '#333', 
                    'font-style'  => '400', 
                    'font-family' => 'Montserrat', 
                    'google'      => true,
                    'font-size'   => '16px', 
                    'line-height' => '32'
            ))
) ) );


