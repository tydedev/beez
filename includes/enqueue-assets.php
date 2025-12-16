<?php
/**
 * Enqueue all theme assets (editor, frontend, shared JS) for Beez theme.
 *
 * @since 1.0.0
 */

if ( ! function_exists( 'beez_enqueue_assets' ) ) {

	function beez_enqueue_assets() {

		// --- Editor JS ---
		$editor_js_asset = include get_theme_file_path( 'public/js/editor.asset.php' );
		wp_enqueue_script(
			'beez-editor',
			get_theme_file_uri( 'public/js/editor.js' ),
			$editor_js_asset['dependencies'],
			$editor_js_asset['version'],
			true
		);

		// --- Shared JS (frontend + editor) ---
		$shared_js_asset = include get_theme_file_path( 'public/js/shared.asset.php' );
		wp_enqueue_script(
			'beez-shared',
			get_theme_file_uri( 'public/js/shared.js' ),
			$shared_js_asset['dependencies'],
			$shared_js_asset['version'],
			true
		);

		// --- Editor CSS ---
		$editor_css_asset = include get_theme_file_path( 'public/css/editor.asset.php' );
		wp_enqueue_style(
			'beez-editor',
			get_theme_file_uri( 'public/css/editor.css' ),
			$editor_css_asset['dependencies'],
			$editor_css_asset['version']
		);

		// --- Frontend CSS (screen) anche nell’editor FSE ---
		$screen_css_asset = include get_theme_file_path( 'public/css/screen.asset.php' );
		wp_enqueue_style(
			'beez-screen',
			get_theme_file_uri( 'public/css/screen.css' ),
			$screen_css_asset['dependencies'],
			$screen_css_asset['version']
		);

	}

	// --- Hook sia frontend sia editor FSE ---
	add_action( 'enqueue_block_assets', 'beez_enqueue_assets' ); // editor + frontend
	add_action( 'wp_enqueue_scripts', 'beez_enqueue_assets' );   // frontend classico
}
