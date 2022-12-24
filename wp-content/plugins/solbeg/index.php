<?php
/*
 * Plugin Name: Solbeg Test
 * Description: Test task
 * Plugin URI:  www.link.com
 * Author URI:  www.author.com
 * Author:      GZ
 * Version:     1.1.1
 *
 * Requires at least: 6.1
 * Requires PHP: 7.4
 *
 */

include 'notifications/AdminNotificationInterface.php';
include 'notifications/VersionNotificationClass.php';
include 'services/CheckingVersionService.php';
include 'admin/controllers/VersionsController.php';

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
