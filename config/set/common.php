<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540;

use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
