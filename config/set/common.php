<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef;

use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
