<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use _PhpScopercae9e6ab5cea\Rector\Core\Configuration\Option;
use _PhpScopercae9e6ab5cea\Rector\Set\ValueObject\DowngradeSetList;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(DowngradeSetList::PHP_80);
    $containerConfigurator->import(DowngradeSetList::PHP_74);
    $containerConfigurator->import(DowngradeSetList::PHP_73);
    $containerConfigurator->import(DowngradeSetList::PHP_72);
    $containerConfigurator->import(DowngradeSetList::PHP_71);
    $containerConfigurator->import(DowngradeSetList::PHP_70);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, ['*/Tests/*', '*/tests/*']);
};
