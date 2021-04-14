<?php

declare (strict_types=1);
namespace _PhpScoperd32e35cfad84;

use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
