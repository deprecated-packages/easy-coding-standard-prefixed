<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    # A. monorepo
    $containerConfigurator->import(__DIR__ . '/../../../coding-standard/config/symplify.php', null, 'not_found');
    # B. installed as dependency
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/coding-standard/config/symplify.php', null, 'not_found');
};
