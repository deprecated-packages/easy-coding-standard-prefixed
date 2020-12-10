<?php

declare (strict_types=1);
namespace _PhpScoper3ba93baeac18;

use _PhpScoper3ba93baeac18\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3ba93baeac18\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
