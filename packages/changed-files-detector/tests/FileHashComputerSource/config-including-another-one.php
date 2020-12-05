<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121;

use _PhpScoper59ccd3f8e121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper59ccd3f8e121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
