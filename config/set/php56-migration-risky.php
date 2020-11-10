<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper0c236037eb04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0c236037eb04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
