<?php

declare (strict_types=1);
namespace _PhpScoper2737ffe13a7b;

use _PhpScoper2737ffe13a7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
