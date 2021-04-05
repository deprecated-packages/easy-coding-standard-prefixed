<?php

declare (strict_types=1);
namespace _PhpScoperf5c57eca8aae;

use _PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
