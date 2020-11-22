<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1;

use _PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    # A. monorepo
    $containerConfigurator->import(__DIR__ . '/../../../coding-standard/config/symplify.php', null, 'not_found');
    # B. installed as dependency
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/coding-standard/config/symplify.php', null, 'not_found');
    # C. installed in PHAR
    $containerConfigurator->import('phar://vendor/symplify/coding-standard/config/symplify.php', null, 'not_found');
};
