<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.payment_method_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentMethodChoiceType.php';

return $this->services['sylius.form.type.payment_method_choice'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodChoiceType(($this->services['sylius.payment_methods_resolver'] ?? $this->getSylius_PaymentMethodsResolverService()), ($this->services['sylius.repository.payment_method'] ?? $this->getSylius_Repository_PaymentMethodService()));
