<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8Z7eWdK' shared service.

return $this->privates['.service_locator.8Z7eWdK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'partyRepository' => ['privates', 'App\\Repository\\PartyRepository', 'getPartyRepositoryService.php', true],
], [
    'partyRepository' => 'App\\Repository\\PartyRepository',
]);