<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6;

use _PhpScoper7cef7256eba6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7cef7256eba6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/common/*.php');
};
