<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.flash_helper' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/FlashHelperInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/FlashHelper.php';

return $this->privates['sylius.resource_controller.flash_helper'] = new \Sylius\Bundle\ResourceBundle\Controller\FlashHelper(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()), 'fr');
