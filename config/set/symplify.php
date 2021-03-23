<?php

declare (strict_types=1);
namespace _PhpScoperc7096eb2567d;

use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    # A. monorepo
    $containerConfigurator->import(__DIR__ . '/../../../coding-standard/config/symplify.php', null, 'not_found');
    # B. installed as dependency
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/coding-standard/config/symplify.php', null, 'not_found');
};
