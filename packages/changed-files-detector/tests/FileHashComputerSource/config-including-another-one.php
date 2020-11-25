<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38;

use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
