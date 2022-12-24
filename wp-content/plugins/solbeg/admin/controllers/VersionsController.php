<?php
namespace App\Admin\Controllers;
use \App\Services\CheckingVersionService;
use \App\Notifications\VersionNotificationClass;

class VersionsController
{

    public function __construct()
    {
        add_action('admin_init', [$this, 'autoDeactivate']);
    }

    public function autoDeactivate()
    {
        $checkingVersionService = new CheckingVersionService();

        if (!$checkingVersionService->isVersionAllowed()) {
            deactivate_plugins( MY_PLUGIN_PATH.'index.php' );
            $this->showNotification();
        }
    }

    private function showNotification()
    {
        $versionNotification = new VersionNotificationClass();
        echo $versionNotification->showNotification();
    }
}

new VersionsController;