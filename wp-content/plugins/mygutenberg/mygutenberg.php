<?php
/**
 * @package MyGutenberg
 */
/*
Plugin Name: Custom Gutenberg
Plugin URI: https://hoangtruc.com/
Description: this plugins is custom gutenberg.
Version: 1.0
Author: Hoang Truc
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: Hoang Truc
*/

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

function create_block_gutenpride_block_init() {
    register_block_type("mygutenberg/block-custom",array(
        'editor_script' => 'mcqac-related-quiz-block-script',
        'editor_style'  => 'mcqac-related-quiz-block-editor-style',
        'style'         => 'mcqac-related-quiz-block-frontend-style',
    ));
}
add_action( 'init', 'create_block_gutenpride_block_init' );
