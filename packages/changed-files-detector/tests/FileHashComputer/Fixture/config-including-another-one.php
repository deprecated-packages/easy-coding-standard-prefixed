<?php

declare (strict_types=1);
namespace _PhpScoper5f836821822a;

use _PhpScoper5f836821822a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
