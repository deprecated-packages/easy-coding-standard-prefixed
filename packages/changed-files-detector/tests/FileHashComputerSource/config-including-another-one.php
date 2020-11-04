<?php

declare (strict_types=1);
namespace _PhpScoper48b5ec5b60cf;

use _PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
