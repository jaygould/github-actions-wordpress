<?php 
// Theme support options
require_once(get_template_directory().'/functions/wordpress-init/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/wordpress-init/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/wordpress-init/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/wordpress-init/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/wordpress-init/sidebar.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/functions/wordpress-init/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/wordpress-init/admin.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/wordpress-init/page-navi.php'); 

// Remove Emoji Support
require_once(get_template_directory().'/functions/wordpress-init/disable-emoji.php'); 

// Customize the WordPress login menu
require_once(get_template_directory().'/functions/wordpress-init/login.php'); 