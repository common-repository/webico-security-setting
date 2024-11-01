<?php
/*
Plugin Name: Webico Security Setting
Plugin URI: https://www.webico.vn
Description: Plugin dành riêng cho CMS của webico.
Contributors: Tran Binh, Webico
Version: 1.0.0
Author: Webico Teams
Text Domain: webico
Domain Path: /languages
Tags: Webico.vn, Tran Binh
Tested up to: 3.9.4
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.webico.vn

*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define('WBC_Setting_DIR', plugin_dir_path(__FILE__));
define('WBC_Setting_URL', plugins_url('/', __FILE__));

include( WBC_Setting_DIR . 'inc/functions.php');
include( WBC_Setting_DIR . 'inc/security.php');
include( WBC_Setting_DIR . 'inc/template.php');
include( WBC_Setting_DIR . 'inc/permission.php');
