<?php

declare (strict_types=1);
namespace _PhpScoper000f93dc572d;

use _PhpScoper000f93dc572d\Rector\Core\Configuration\Option;
use _PhpScoper000f93dc572d\Rector\Set\ValueObject\DowngradeSetList;
use _PhpScoper000f93dc572d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
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
