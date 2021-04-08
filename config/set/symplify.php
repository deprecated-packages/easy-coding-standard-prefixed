<?php

declare (strict_types=1);
namespace _PhpScoper9a024705919c;

use _PhpScoper9a024705919c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9a024705919c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    # A. monorepo
    $containerConfigurator->import(__DIR__ . '/../../../coding-standard/config/symplify.php', null, 'not_found');
    # B. installed as dependency
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/coding-standard/config/symplify.php', null, 'not_found');
};
