<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033;

use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
