<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.tax_category' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Form/Type/TaxCategoryType.php';

return $this->services['sylius.form.type.tax_category'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType('Sylius\\Component\\Taxation\\Model\\TaxCategory', $this->parameters['sylius.form.type.tax_category.validation_groups']);
