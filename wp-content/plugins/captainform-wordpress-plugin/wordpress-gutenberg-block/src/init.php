<?php
/**
 * Blocks Initializer
 *
 * @since   1.0.0
 * @package CPF
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function captain_form_block_dev_assets() { // phpcs:ignore
	wp_enqueue_style(
		'captain-form-block-style-dev-css',
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), 
		array( 'wp-editor' ) 
	);
}
add_action( 'enqueue_block_assets', 'captain_form_block_dev_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function captain_form_editor_dev_assets() { // phpcs:ignore
	wp_enqueue_script(
		'captain-form-block-dev-js',
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
		true
	);

	wp_enqueue_style(
		'captain-form-block-editor-dev-css',
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ),
		array( 'wp-edit-blocks' )
	);
}
add_action( 'enqueue_block_editor_assets', 'captain_form_editor_dev_assets' );