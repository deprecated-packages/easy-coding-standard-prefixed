<?php

declare (strict_types=1);
namespace _PhpScoper2dcc760f8ff8;

use _PhpScoper2dcc760f8ff8\Rector\Core\Configuration\Option;
use _PhpScoper2dcc760f8ff8\Rector\Set\ValueObject\DowngradeSetList;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
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
