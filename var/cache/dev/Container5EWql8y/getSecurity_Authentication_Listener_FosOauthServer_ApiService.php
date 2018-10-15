<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.fos_oauth_server.api' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Security/Firewall/OAuthListener.php';

return $this->privates['security.authentication.listener.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php')));
