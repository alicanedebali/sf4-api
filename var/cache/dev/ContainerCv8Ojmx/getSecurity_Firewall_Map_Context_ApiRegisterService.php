<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api_register' shared service.

return $this->privates['security.firewall.map.context.api_register'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.authentication.listener.anonymous.api_register'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_ApiRegisterService.php'));
    yield 2 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'api_register', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api_register', 'security.user_checker', '.security.request_matcher.DJ33rex', true, true, NULL, NULL, NULL, NULL, NULL, array(0 => 'anonymous'), NULL));
