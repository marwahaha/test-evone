<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.valid_attribute_value' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Validator/Constraints/ValidAttributeValueValidator.php';

return $this->services['sylius.validator.valid_attribute_value'] = new \Sylius\Bundle\AttributeBundle\Validator\Constraints\ValidAttributeValueValidator(($this->services['sylius.registry.attribute_type'] ?? $this->load('getSylius_Registry_AttributeTypeService.php')));
