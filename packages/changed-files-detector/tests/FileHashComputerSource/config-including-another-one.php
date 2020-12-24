<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493;

use _PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere106f9fd4493\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
