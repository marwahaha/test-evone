<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.in_stock' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle/Validator/Constraints/InStockValidator.php';

return $this->services['sylius.validator.in_stock'] = new \Sylius\Bundle\InventoryBundle\Validator\Constraints\InStockValidator(($this->services['sylius.availability_checker.default'] ?? $this->services['sylius.availability_checker.default'] = new \Sylius\Component\Inventory\Checker\AvailabilityChecker()));
