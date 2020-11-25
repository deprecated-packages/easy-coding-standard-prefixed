<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
