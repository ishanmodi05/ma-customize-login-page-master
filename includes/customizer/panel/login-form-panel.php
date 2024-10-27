<?php

/**
 * Customizer Panel for Login
 *
 * @package 	    MACustomizeLoginPage
 * @author 			Ishan Modi
 * @link 			https://github.com/ishanmodi301/ma-customize-login-page.git
 * @license			GPL-3.0-or-later
 * @version 1.0.0
 */

require_once('section/background.php');
require_once(plugin_dir_path(dirname(__FILE__, 3)) . 'assets/admin/css/customizer-css.php');

use Section\LoginBackground;
use CSS\CustomizerCSS;

class Customizer_Panel
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'ma_login_customizer_panels'), 30);
        add_action('wp_head', array($this, 'ma_login_customizer_css'), 30);
    }

    public function ma_login_customizer_panels($wp_customize)
    {
        $wp_customize->add_panel('admin_login_form_customizer', array(
            'title' => __('Admin Login Form Customizer', 'MA-login-customizer'),
            'description' => 'Customize Admin Login form',
            'priority' => 10,
        ));

        $this->ma_login_customizer_sections($wp_customize);
    }

    public function ma_login_customizer_sections($wp_customize)
    {
        new LoginBackground\Background($wp_customize);
    }

    public function ma_login_customizer_css()
    {
        new CustomizerCSS\Customizer_CSS();
    }
}

new Customizer_Panel();
