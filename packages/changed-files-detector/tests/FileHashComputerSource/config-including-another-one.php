<?php

declare (strict_types=1);
namespace _PhpScoper5384d7276e1f;

use _PhpScoper5384d7276e1f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5384d7276e1f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
