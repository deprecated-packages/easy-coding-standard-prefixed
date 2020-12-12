<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper326bba7310a2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper326bba7310a2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
