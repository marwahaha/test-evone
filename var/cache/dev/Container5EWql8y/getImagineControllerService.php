<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Liip\ImagineBundle\Controller\ImagineController' shared service.

include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Controller/ImagineController.php';

return $this->services['Liip\ImagineBundle\Controller\ImagineController'] = new \Liip\ImagineBundle\Controller\ImagineController(($this->privates['liip_imagine.service.filter'] ?? $this->load('getLiipImagine_Service_FilterService.php')), ($this->services['liip_imagine.data.manager'] ?? $this->load('getLiipImagine_Data_ManagerService.php')), ($this->services['liip_imagine.cache.signer'] ?? $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'))));
