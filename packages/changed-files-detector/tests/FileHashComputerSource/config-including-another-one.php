<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153;

use _PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbd5c5a045153\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
