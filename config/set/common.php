<?php

declare (strict_types=1);
namespace _PhpScoper9907e2e69ce3;

use _PhpScoper9907e2e69ce3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
