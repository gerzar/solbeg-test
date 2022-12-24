<?php
namespace App\Notifications;

class VersionNotificationClass implements AdminNotificationInterface
{

    public function __construct()
    {
        add_action('admin_notices', [$this, 'showNotification']);
    }

    public function showNotification() {
        ob_start();
        include_once  MY_PLUGIN_PATH.'/admin/views/version_notification.php';
        return ob_get_clean();
    }

}
