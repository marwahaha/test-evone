<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fidry_alice_data_fixtures.loader.doctrine' shared service.

include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

if ($lazyLoad) {
    return $this->services['fidry_alice_data_fixtures.loader.doctrine'] = $this->createProxy('PurgerLoader_cb68499', function () {
        return \PurgerLoader_cb68499::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getFidryAliceDataFixtures_Loader_DoctrineService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Fidry\AliceDataFixtures\Loader\PurgerLoader(($this->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $this->load('getFidryAliceDataFixtures_Doctrine_PersisterLoaderService.php')), ($this->services['fidry_alice_data_fixtures.persistence.purger_factory.doctrine'] ?? $this->load('getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService.php')), 'delete', ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
