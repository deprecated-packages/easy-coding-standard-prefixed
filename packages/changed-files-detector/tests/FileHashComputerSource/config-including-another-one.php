<?php

declare (strict_types=1);
namespace _PhpScoper9e3283ae8193;

use _PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
