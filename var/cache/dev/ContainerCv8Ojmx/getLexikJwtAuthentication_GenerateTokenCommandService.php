<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'lexik_jwt_authentication.generate_token_command' shared service.

$this->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->load('getLexikJwtAuthentication_JwtManagerService.php')), new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->load('getSecurity_User_Provider_Concrete_ChainProviderService.php'));
    yield 1 => ($this->privates['security.user.provider.concrete.in_memory'] ?? $this->load('getSecurity_User_Provider_Concrete_InMemoryService.php'));
    yield 2 => ($this->privates['fos_user.user_provider.username'] ?? $this->load('getFosUser_UserProvider_UsernameService.php'));
}, 3));

$instance->setName('lexik:jwt:generate-token');

return $instance;