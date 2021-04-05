<?php

declare (strict_types=1);
namespace _PhpScoper6b644dbe715d;

use _PhpScoper6b644dbe715d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6b644dbe715d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
