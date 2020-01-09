<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gEKwHLd' shared service.

return $this->privates['.service_locator.gEKwHLd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
    'programRepository' => ['privates', 'App\\Repository\\ProgramRepository', 'getProgramRepositoryService.php', true],
], [
    'categoryRepository' => 'App\\Repository\\CategoryRepository',
    'programRepository' => 'App\\Repository\\ProgramRepository',
]);
