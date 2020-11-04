<?php

declare (strict_types=1);
namespace _PhpScoper75713bc3e278;

use _PhpScoper75713bc3e278\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper75713bc3e278\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
