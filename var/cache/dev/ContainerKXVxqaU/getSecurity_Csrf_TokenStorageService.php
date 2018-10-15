<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.csrf.token_storage' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Csrf/TokenStorage/TokenStorageInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Csrf/TokenStorage/ClearableTokenStorageInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Csrf/TokenStorage/SessionTokenStorage.php';

return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
