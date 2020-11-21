<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670;

use _PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
