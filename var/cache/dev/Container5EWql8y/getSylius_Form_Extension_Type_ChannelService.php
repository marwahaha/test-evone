<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.extension.type.channel' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractTypeExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Extension/ChannelTypeExtension.php';

return $this->services['sylius.form.extension.type.channel'] = new \Sylius\Bundle\CoreBundle\Form\Extension\ChannelTypeExtension(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()));
