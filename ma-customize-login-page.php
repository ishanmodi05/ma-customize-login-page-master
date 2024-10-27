<?php

/**
 * MA Customize Login Page
 *
 * @package           MACustomizeLoginPage
 * @author            Ishan Modi
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       MA Customize Login Page
 * Plugin URI:        https://github.com/ishanmodi301/ma-customize-login-page.git
 * Description:       Customize the WordPress Login page.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6 or higher
 * Author:            Ishan Modi
 * Text Domain:       MA-login-customizer
 * License:           GPL-3.0-or-later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Exit if accessed directly.
 */
if (!defined('ABSPATH')) {
    exit();
}

require_once('includes/customizer/panel/login-form-panel.php');

class MA_Customize_Login_Page
{
    public function __construct()
    {
        add_action('customize_preview_init', array($this, 'customize_login_form_live_preview'));
    }

    public function customize_login_form_live_preview()
    {
        // error_log('Customizing login form script is enqueued.');
        wp_enqueue_script(
            'customize-login-preview',
            plugins_url('assets/admin/js/customize-login-preview.js', __FILE__),
            array('customize-preview'),
            '1.0',
            true
        );
    }
}

new MA_Customize_Login_Page();



/*function panel($wp_customize){

    $wp_customize->add_panel('some_panel',array(
        'title'=>'Panel1',
        'description'=> 'This is panel Description',
        'priority'=> 10,
    ));
    
    
    $wp_customize->add_section('section',array(
        'title'=>'section',
        'priority'=>10,
        'panel'=>'some_panel',
    ));
    
    
    $wp_customize->add_setting('setting_demo',array(
        'default'=>'red',
    ));
    
    
    $wp_customize->add_control('contrl_demo',array(
        'label'=>'Text',
        'type'=>'text',
        'section'=>'section',
        'settings'=>'setting_demo',
    ));
}   

add_action('customize_register','panel');

?>
<?php
function mytheme_customize_css()
{
    ?>
    <style type="text/css">
        h1 { color: <?php echo get_theme_mod('setting_demo', '#f2f2f2'); ?>; }
    </style>
    <?php  
}
// echo get_theme_mod('setting_demo', 'red');
add_action( 'wp_head', 'mytheme_customize_css');

*/