<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3;

use _PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
