<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.listener.oauth_user.reloader' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/EventListener/UserReloaderListener.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Reloader/UserReloaderInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Reloader/UserReloader.php';

return $this->privates['sylius.listener.oauth_user.reloader'] = new \Sylius\Bundle\UserBundle\EventListener\UserReloaderListener(new \Sylius\Bundle\UserBundle\Reloader\UserReloader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));
