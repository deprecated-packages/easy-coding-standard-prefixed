<?php

declare (strict_types=1);
namespace _PhpScoper6d453419d16a;

use _PhpScoper6d453419d16a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
