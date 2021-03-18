<?php

declare (strict_types=1);
namespace _PhpScoper0b185984cfb7;

use _PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
