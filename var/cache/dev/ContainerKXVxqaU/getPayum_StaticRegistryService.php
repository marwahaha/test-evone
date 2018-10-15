<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.static_registry' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/GatewayRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/StorageRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/RegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/AbstractRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/ContainerAwareRegistry.php';

$this->services['payum.static_registry'] = $instance = new \Payum\Core\Bridge\Symfony\ContainerAwareRegistry(array(), array('Sylius\\Component\\Core\\Model\\Order' => 'payum.storage.sylius_component_core_model_order', 'Sylius\\Component\\Core\\Model\\Payment' => 'payum.storage.sylius_component_core_model_payment'), array());

$instance->setContainer($this);

return $instance;
