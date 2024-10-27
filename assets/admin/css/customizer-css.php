<?php

/**
 * MA Customize Login Page CSS
 *
 * @package 	    MACustomizeLoginPage
 * @author 			Ishan Modi
 * @link 			https://github.com/ishanmodi301/ma-customize-login-page.git
 * @license			GPL-3.0-or-later
 * @version 1.0.0
 */

namespace CSS\CustomizerCSS;

class Customizer_CSS
{

    public function __construct()
    {
?>
        <style type="text/css">
            h1 {
                color: <?php echo get_theme_mod('background_color_setting', ''); ?>;
            }
        </style>
<?php
    }
}
