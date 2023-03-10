<?php
/**
 * Plugin Name: Plugin Development
 * Plugin URI: https://github.com/Geronimo-Basso
 * Description: Big brain time
 * Version: 1.0
 * Author: Geronimo Basso
 * Author URI: https://github.com/Geronimo-Basso
 * Requires PHP: 5.4
 * Requires at least: 4.7
 * Tested up to: 6.0
 * Text Domain:
 * Domain Path: /languages/
 *
 * WC requires at least: 3.5
 * WC tested up to: 6.8
 * Woo: 260061:ecaa2080668997daf396b8f8a50d891a
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

add_action('admin_menu', 'pdev_styling_create_menu');

function pdev_styling_create_menu() {
	add_menu_page('Testing Plugin Styles', 'Plugin Styling', 'manage_options',__FILE__, 'pdev_styling_settings');
}

function pdev_styling_settings() {
	?>
	<div class="wrap">
		<h1><span class="dashicons dashicons-smiley"></span> plugin</h1>
		<h2>My plugin</h2>
		<h3>My plugin</h3>
	</div>
	<?php
}
