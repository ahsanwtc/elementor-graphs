<?php
/**
 * Plugin Name: elementor-graphs
 * Plugin URI: https://github.com/ahsanwtc/elementor-graphs
 * Description: A grphing plugin to be used with wordpress and elementor
 * Version: 1.0
 * Author: jsan
 * Author URI: https://iamahsan.dev
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ($content) {
  return $content .= '<p>Thank you for reading!</p>';
}

// https://www.benmarshall.me/create-an-elementor-widget/