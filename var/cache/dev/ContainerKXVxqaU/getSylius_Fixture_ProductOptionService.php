<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.product_option' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/config/Definition/ConfigurationInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/FixturesBundle/Fixture/FixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/ProductOptionFixture.php';

return $this->services['sylius.fixture.product_option'] = new \Sylius\Bundle\CoreBundle\Fixture\ProductOptionFixture(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['sylius.fixture.example_factory.product_option'] ?? $this->load('getSylius_Fixture_ExampleFactory_ProductOptionService.php')));
