<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iupvTt7' shared service.

return $this->privates['.service_locator.iupvTt7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'chat' => ['privates', '.errored..service_locator.iupvTt7.App\\Entity\\Chat', NULL, 'Cannot autowire service ".service_locator.iupvTt7": it references class "App\\Entity\\Chat" but no such service exists.'],
], [
    'chat' => 'App\\Entity\\Chat',
]);
