<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Bundle\CoreBundle\Command\InstallSampleDataCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Command/AbstractInstallCommand.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Command/InstallSampleDataCommand.php';

return $this->services['Sylius\Bundle\CoreBundle\Command\InstallSampleDataCommand'] = new \Sylius\Bundle\CoreBundle\Command\InstallSampleDataCommand();
