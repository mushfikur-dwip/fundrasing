<?php
/**
 * Plugin Name: Fundraising Dashboard
 * Plugin URI: https://example.com
 * Description: A WordPress plugin to create and manage fundraising campaigns with an intuitive dashboard.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin path.
define('FUNDRAISING_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('FUNDRAISING_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include required files.
require_once FUNDRAISING_PLUGIN_PATH . 'includes/admin-dashboard.php';
require_once FUNDRAISING_PLUGIN_PATH . 'includes/campaign-functions.php';
require_once FUNDRAISING_PLUGIN_PATH . 'includes/donor-functions.php';

// Enqueue assets.
function fundraising_enqueue_assets() {
    wp_enqueue_style('fundraising-styles', FUNDRAISING_PLUGIN_URL . 'assets/css/styles.css');
    wp_enqueue_script('fundraising-scripts', FUNDRAISING_PLUGIN_URL . 'assets/js/scripts.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'fundraising_enqueue_assets');

// Add a menu item for the dashboard.
function fundraising_add_admin_menu() {
    add_menu_page(
        'Fundraising Dashboard',
        'Fundraising',
        'manage_options',
        'fundraising-dashboard',
        'fundraising_render_dashboard',
        'dashicons-chart-line',
        6
    );
}
add_action('admin_menu', 'fundraising_add_admin_menu');

// Render the dashboard page.
function fundraising_render_dashboard() {
    include_once FUNDRAISING_PLUGIN_PATH . 'templates/dashboard.php';
}
