<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
