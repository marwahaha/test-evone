<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.product_variant_combination' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Validator/ProductVariantCombinationValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityChecker.php';

return $this->services['sylius.validator.product_variant_combination'] = new \Sylius\Bundle\ProductBundle\Validator\ProductVariantCombinationValidator(($this->services['sylius.checker.product_variants_parity'] ?? $this->services['sylius.checker.product_variants_parity'] = new \Sylius\Component\Product\Checker\ProductVariantsParityChecker()));
