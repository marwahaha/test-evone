<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.images_remove' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/ImagesRemoveListener.php';

return $this->services['sylius.listener.images_remove'] = new \Sylius\Bundle\CoreBundle\EventListener\ImagesRemoveListener(($this->services['sylius.image_uploader'] ?? $this->load('getSylius_ImageUploaderService.php')), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->load('getLiipImagine_Filter_ManagerService.php')));
