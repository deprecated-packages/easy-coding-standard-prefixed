<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac;

use _PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
