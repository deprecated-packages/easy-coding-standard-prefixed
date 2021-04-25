<?php

declare (strict_types=1);
namespace _PhpScoper446d16070175;

use _PhpScoper446d16070175\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
