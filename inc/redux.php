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
            )
        )
    ) );
