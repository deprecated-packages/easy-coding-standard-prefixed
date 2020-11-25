<?php

declare (strict_types=1);
namespace _PhpScoper13133e188f67;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper13133e188f67\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper13133e188f67\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
