<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.translation_locale_provider.immutable' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Translation/Provider/TranslationLocaleProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Translation/Provider/ImmutableTranslationLocaleProvider.php';

return $this->services['sylius.translation_locale_provider.immutable'] = new \Sylius\Component\Resource\Translation\Provider\ImmutableTranslationLocaleProvider(array(0 => 'fr'), 'fr');
