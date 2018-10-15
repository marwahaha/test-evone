<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.context_listener.1' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ContextListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';

return $this->privates['security.context_listener.1'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), new RewindableGenerator(function () {
    yield 0 => ($this->privates['sylius.admin_user_provider.email_or_name_based'] ?? $this->load('getSylius_AdminUserProvider_EmailOrNameBasedService.php'));
    yield 1 => ($this->privates['sylius.shop_user_provider.email_or_name_based'] ?? $this->load('getSylius_ShopUserProvider_EmailOrNameBasedService.php'));
}, 2), 'shop', ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')));
