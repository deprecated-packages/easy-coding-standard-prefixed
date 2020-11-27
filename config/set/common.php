<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b;

use _PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
