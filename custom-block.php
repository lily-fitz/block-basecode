<?php
/**
 * Plugin Name:       Custom Block
 * Description:       Custom block setup.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Lily Fitz
 * Text Domain:       block-basecode
 *
 * @package           create-block
 */


function create_block_custom_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_custom_block_block_init' );
