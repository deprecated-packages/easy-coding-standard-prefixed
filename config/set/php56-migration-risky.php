<?php

declare (strict_types=1);
namespace _PhpScoper190659c42b56;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
