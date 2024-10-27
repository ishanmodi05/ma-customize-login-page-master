<?php

/**
 * Customizer controls for Login Background
 *
 * @package 	    MACustomizeLoginPage
 * @author 			Ishan Modi
 * @link 			https://github.com/ishanmodi301/ma-customize-login-page.git
 * @license			GPL-3.0-or-later
 * @version 1.0.0
 */

namespace Section\LoginBackground;

class Background
{

    public function __construct($wp_customize)
    {

        $wp_customize->add_section(
            'background_color',
            array(
                'title' => __('Background Color', 'MA-login-customizer'),
                'panel' => 'admin_login_form_customizer',
                'priority' => 10,
            )
        );

        $wp_customize->add_setting(
            'background_color_setting',
            array(
                'default' => '#000000',
                'type' => 'theme_mod',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize,
                'background_color_control',
                array(
                    'label' => __('Background', 'MA-login-customizer'),
                    'section' => 'background_color',
                    'priority' => 5,
                    'settings' => 'background_color_setting',
                )
            )
        );
    }
}
