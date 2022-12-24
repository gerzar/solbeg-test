<?php
namespace App\Services;

class CheckingVersionService
{
    public function isVersionAllowed(): bool
    {

        if(version_compare(PHP_VERSION, '7.4') >= 0){
            return true;
        }

        return false;
    
    }
}