<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267;

use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
