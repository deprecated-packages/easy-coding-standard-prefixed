<?php

declare (strict_types=1);
namespace _PhpScoper880bfa4d8b51;

use _PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
