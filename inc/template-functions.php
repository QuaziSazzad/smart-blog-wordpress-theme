<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package smart_blog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blog_style(){
	?>
	<style type="text/css">
   .top-header{text-align: <?php echo cs_get_customize_option('menu_position'); ?> !important;background-color:<?php echo cs_get_customize_option('bc'); ?>;width: 100%;}
   footer {margin-top: 20px; padding: 30px 0 20px 0;background-color: <?php echo cs_get_customize_option('f_color'); ?>;}
   footer .back-to-top a {color: <?php echo cs_get_customize_option('ft_color'); ?>;background-image: url("../images/downArrow.png");background-repeat: no-repeat;background-position: 100% 55%;font-size: <?php echo cs_get_customize_option('f_size'); ?>px}
   footer .footer-social{text-align: center; margin: 10px 0;}
  </style>

  <?php
}
add_action('wp_head','blog_style');
